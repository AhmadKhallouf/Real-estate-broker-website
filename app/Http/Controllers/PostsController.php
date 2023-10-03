<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use App\Notifications\AcceptSuccessfully;
use App\Notifications\GeneratePost;
use App\Notifications\UploadPostSuccessfully;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification as FacadesNotification;

use function PHPUnit\Framework\countOf;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $postInfo = Posts::where('accept',true)->with('users')->select('id','userID','business','type','city','town','village','pathOfPhotos')->get();
            
      return view('user.listing',compact('postInfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('pathOfPhotos')->getClientOriginalName();
        $path = $request->file('pathOfPhotos')->storeAs('PostsPhoto',$image,'PostsPhoto');

       $post = Posts::create([
            'userID'=>auth()->user()->id,
            'business'=>$request->business,
            'type'=>$request->type,
            'price'=>$request->price,
            'timeOfInv'=>$request->timeOfInv,
            'city'=>$request->city,
            'town'=>$request->town,
            'village'=>$request->village,
            'PointToIllustration'=>$request->PointToIllustration,
            'numberOfRealEstate'=>$request->numberOfRealEstate,
            'pathOfPhotos'=>$path,
            'numberOfProcess'=>$request->numberOfProcess,
        ]);

        $admins = User::where('type','admin')->get();
        $user_create = auth()->user()->name;

        FacadesNotification::send($admins,new GeneratePost($post->id,$user_create,$post->business,$post->type));
        FacadesNotification::send(Auth::user(),new UploadPostSuccessfully());

        return view('user.userPage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postInfo = Posts::where('id',$id)->with('users')->select('id','userID','business','type','timeOfInv','city','town','village','PointToIllustration','numberOfRealEstate','pathOfPhotos','price','created_at')->get();
        // return $postInfo;   
      return view('user.viewProperty',compact('postInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $postsUpdated =  Posts::where('id',$id)->update([
            'accept'=> 1,
        ]);
      $postId = Posts::where('id',$id)->with('users')->get();
     // return $postId;

       $user_create = User::where('id',$postId[0]->users->id)->get();

        FacadesNotification::send($user_create,new AcceptSuccessfully());

        return view('admin.adminBoard');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Posts::where('id',$id)->delete();
        return view('admin.adminBoard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function showARNot($id)
    {

        $postInfo = Posts::where('id',$id)->with('users')->select('id','userID','business','type','timeOfInv','city','town','village','PointToIllustration','numberOfRealEstate','pathOfPhotos','price','created_at')->get();
        $getId = DB::table('Notifications')->where('data->post_id',$id)->pluck('id');
        DB::table('notifications')->where('id',$getId)->update(['read_at'=>now()]);
        
      return view('user.viewProperty',compact('postInfo'))->with(['request'=>'true']);
    }
}
