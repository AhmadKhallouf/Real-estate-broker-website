<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Models\NumbersAndCost;
use App\Models\PostInfo;
use App\Models\Posts;
use App\Models\User;
use App\Notifications\GeneratePost;
use App\Notifications\RePostNotification;
use App\Notifications\UploadPostSuccessfully;
use App\Traits\ImageProcessingTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification as FacadesNotification;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{   

    use ImageProcessingTrait;

//----------------------------------------------------------------------------------------------------------------------  

    //display all active posts in page
    public function show_all_posts($number){
        if($number == 1){
            $posts = Posts::where('status','active')->with('users:id,name,type')->with('postInfo')->with('images')->get();
        }elseif($number == 2){
            $posts = Posts::where('status','active')->where('type_of_investment','sell')->with('users:id,name,type')->with('postInfo')->with('images')->get();
        }elseif($number == 3){
            $posts = Posts::where('status','active')->where('type_of_investment','rent')->with('users:id,name,type')->with('postInfo')->with('images')->get();
        }elseif($number == 4){
            $posts = Posts::where('status','active')->where('type_of_investment','mortgage')->with('users:id,name,type')->with('postInfo')->with('images')->get();
        }
         return view('user.All_listing',compact('posts'));
    }

//----------------------------------------------------------------------------------------------------------------------

    //this function allows user to see all properties of the post 
    public function show_specific_post($id)
    {
        $post = Posts::where('id',$id)->with('users:id,name,phone')->with('postInfo')->with('images')->first();
        // return $postInfo;   
      return view('user.viewProperty',compact('post'));
    }

//----------------------------------------------------------------------------------------------------------------------

 // get the post property page
 public function get_post_property(){

    $numbersAndCosts = NumbersAndCost::select('merchant_account_number','cost_per_day')->first();

    return view('user.postProperty',compact('numbersAndCosts'));
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------    

    //upload a post by user
    public function store(Request $request)
    {   
        
        //to prevent Hacker from dot && ddot  
        $posts = Posts::where('id',auth()->user()->id)->where('status','pending')->count();

        if($posts<10){ 

       $post = Posts::create([
            'user_id'=>auth()->user()->id,
            'type_of_investment'=>$request->type_of_investment,
            'type_of_real_estate'=>$request->type_of_real_estate,
            'investment_value' => $request->investment_value,
            'space'=>$request->space,
            'time_of_investment'=>$request->time_of_investment,
            'city'=>$request->city,
            'town'=>$request->town,
            'village'=>$request->village,
            'neighborhood'=>$request->neighborhood,
            'PointToIllustration'=>$request->PointToIllustration,
            'description'=>$request->description,
            'numberOfProcess'=>$request->numberOfProcess,
            'time_of_ad'=>$request->time_of_ad,
            'status'=>'pending',
        ]);

        if($request->hasFile('images')){
            $images = $request->file('images');
        foreach( $images as $img){
        $extension = $img->getClientOriginalExtension();
        $imagePath = $this->saveImage($img,$extension,1060,706); 

        Images::create([
            'post_id' => $post->id,
            'image' => $imagePath,
        ]);

        }

                                        }

        if(($request->type_of_real_estate == "apartment")||($request->type_of_real_estate == "house")||($request->type_of_real_estate == "villa")){
            PostInfo::create([
                'post_id' => $post->id,
                'in_floor' => $request->in_floor,
                'number_of_floors' => $request->number_of_floors,
                'number_of_bedrooms' => $request->number_of_bedrooms,
                'number_of_living_rooms' => $request->number_of_living_rooms,
                'number_of_bathrooms' => $request->number_of_bathrooms,
                'model_of_kitchen' => $request->model_of_kitchen,
            ]);
        }


         $admins = User::where('type','admin')->get();
         $user_create = auth()->user()->name;

         FacadesNotification::send($admins,new GeneratePost($post->id,$user_create,$post->type_of_investment,$post->type_of_real_estate));
         FacadesNotification::send(Auth::user(),new UploadPostSuccessfully());

        return redirect()->back()->with('message','thanks sir, please wait until the admin check your request, it could be take about 24 hours at most.');

        }else{
            return redirect()->back()->with('message','Sorry sir but you have exceeded the maximum number of pending requests so far,wait until the requests are reviewed by the admins');
        }

        
    }

//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
   
 // get the posts that posted by the requested user
    public function show_my_posts(){

        $myPosts = Posts::where('user_id',auth()->user()->id)->select('id','type_of_investment','type_of_real_estate','time_of_investment','city','town','neighborhood','village','investment_value','time_of_ad','status')->with('images:post_id,image')->get();

        return view('user.myPosts',compact('myPosts'));
    }
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    // get the update post page to user whose upload the post
    public function get_update_post_page($id){
        
        $post = Posts::where('id',$id)->select('id','type_of_investment','type_of_real_estate','space','time_of_investment','city','town','neighborhood','village','PointToIllustration','description','investment_value','numberOfProcess','status')->with('postInfo')->with('images')->first();

        return view('user.update_post',compact('post'));
        
    }

    //---------------------------------------------------------
    
    // delete one photo from the update page
    public function delete_one_photo_in_update($image_id,$post_id){

        $photo = Images::where('id',$image_id)->first();

        $this->deleteImage($photo->image);

        $success = Images::where('id',$image_id)->delete();
        
        if($success){
            return redirect()->back();
        }else{
            return redirect('/redirect');
        }

    }

    //------------------------------------------------------------------

    //upload new information about the post that the user need to update it
    public function update_post(Request $request,$id){

        Posts::where('id',$id)->update([
            'type_of_investment'=>$request->type_of_investment,
            'type_of_real_estate'=>$request->type_of_real_estate,
            'investment_value' => $request->investment_value,
            'space'=>$request->space,
            'time_of_investment'=>$request->time_of_investment,
            'city'=>$request->city,
            'town'=>$request->town,
            'village'=>$request->village,
            'neighborhood'=>$request->neighborhood,
            'PointToIllustration'=>$request->PointToIllustration,
            'description'=>$request->description,
        ]);

        if($request->hasFile('images')){
            $images = $request->file('images');
        foreach( $images as $img){
        $extension = $img->getClientOriginalExtension();
        $imagePath = $this->saveImage($img,$extension,1060,706); 

        Images::create([
            'post_id' => $id,
            'image' => $imagePath,
        ]);

        }

                                        }

        if(($request->type_of_real_estate == "apartment")||($request->type_of_real_estate == "house")||($request->type_of_real_estate == "villa")){
            PostInfo::create([
                'post_id' => $id,
                'in_floor' => $request->in_floor,
                'number_of_floors' => $request->number_of_floors,
                'number_of_bedrooms' => $request->number_of_bedrooms,
                'number_of_living_rooms' => $request->number_of_living_rooms,
                'number_of_bathrooms' => $request->number_of_bathrooms,
                'model_of_kitchen' => $request->model_of_kitchen,
            ]);
        }


        // $admins = User::where('type','admin')->get();
        // $user_create = auth()->user()->name;

        // FacadesNotification::send($admins,new GeneratePost($post->id,$user_create,$post->type_of_investment,$post->type_of_real_estate));
        // FacadesNotification::send(Auth::user(),new UploadPostSuccessfully());

        return redirect()->back()->with('message','thanks sir, the information updated successfully.');

    }
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------
        
    //get the re-post page for user to display the post that expired time
    public function get_re_post_page($id){
        $numbersAndCosts = NumbersAndCost::select('merchant_account_number','cost_per_day')->first();
        return view('user.re_post',compact('numbersAndCosts','id'));
    } 

    //-----------------------------------------------------------------------------

    // upload the new data to admin to re-post 
    public function re_post(Request $request,$id){

        Posts::where('id',$id)->update([
            'time_of_ad' => $request->time_of_ad,
            'numberOfProcess' => $request->numberOfProcess,
            'status' => 'pending',
        ]);

          $admins = User::where('type','admin')->get();
          $user_create = auth()->user()->name;

          FacadesNotification::send($admins,new RePostNotification('re_post',$user_create,$id,$request->numberOfProcess,$request->time_of_ad));

        return redirect()->back()->with('message','your request in process it maybe take about 24 hours at most, thanks for your trust');

    }

    //----------------------------------------------------------------------------------------------------------------------------------------------

    public function delete_post($id){

        $post = Posts::where('id',$id)->with('postInfo')->with('users')->with('images')->first();

        if((auth()->user()->id == $post->users->id) || (auth()->user()->type == 'admin')){

            if(!empty($post->images)){
            foreach($post->images as $img){
                $this->deleteImage($img);
            }
                             }

            Posts::where('id',$id)->delete();

            return redirect()->back()->with('message','the post have been deleted successfully');

        }else{
            return redirect('/redirect')->with('message','sorry sir but you have not permission to do this action ');
        }
    }

//---------------------------------------------------------------------------------------------------------------------------------------------------------


//mark notification as read and delete it
public function read_and_delete_individual_notification($id){
    DB::table('notifications')->where('id',$id)->delete();

    return redirect()->back();
}

//-------------------------------------------------------------------
    
//delete all unreadNotification 
public function delete_all_unread_notifications(){
    auth()->user()->unreadNotifications->delete();
    return redirect()->back();
}




















}
