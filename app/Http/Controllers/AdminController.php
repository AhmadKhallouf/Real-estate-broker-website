<?php

namespace App\Http\Controllers;

use App\Models\NumbersAndCost;
use App\Models\OfficeLink;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\AcceptSuccessfully;
use App\Notifications\RefusePostNotification;
use Carbon\Carbon;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification as FacadesNotification;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    

    //get the posts setting page
    public function get_posts_setting_page(){

        $posts = Posts::with('images')->orderBy('created_at','desc')->get();

        return view('admin.posts_setting',compact('posts'));
    }
//---------------------------------------------------------------------------------------------------

    //accept a post from yser request
    public function accept_post($id){

       $post = Posts::where('id',$id)->with('users')->first();

       $post['status'] = 'active';
       $post['expires_at'] = Carbon::now()->addDays($post->time_of_ad);
       $post->save();

       $time = now();

       FacadesNotification::send($post->users,new AcceptSuccessfully($post->id,$time));

        return redirect()->back()->with('message','the post accepted successfully');
    }

//---------------------------------------------------------------------------------------------------

    //refuse the post because wrong information 
    public function refuse_post($id){

        $post = Posts::where('id',$id)->with('users')->first();

        $post['status'] = 'refuse';
        $post->save();

        FacadesNotification::send($post->users,new RefusePostNotification($post->id));

        return redirect()->back()->with('message','the post was refused.....!!!!!');
    }

//----------------------------------------------------------------------------------------------------------------------------------

    //get users setting page for admin to make a process 
    public function get_users_setting_page(){

        if(auth()->user()->type == 'admin'){
        $users = User::where('type','user')->get();

        return view('admin.users_sitting',compact('users'));
        }else{
            return redirect('/redirect')->with('message','sorry sir...!!!!, but you can not access to this page');
        }

    }

//----------------------------------------------------------------------------------------------------------------------------------

    //block a user account 
    public function block_user($id){

        if(auth()->user()->type == "admin"){

            User::where('id',$id)->update(['active'=>0]);

            return redirect()->back()->with('message','the user was blocked successfully.......!!!!!');
        }
    }

//----------------------------------------------------------------------------------------------------------------------------------

    //unblock a user that you blocked
    public function unblock_user($id){

        User::where('id',$id)->update(['active' => 1]);

        return redirect()->back()->with('message','the user was unblocked successfully');

    }

//----------------------------------------------------------------------------------------------------------------------------------

    //get the user information
    public function get_user_information_page($id){

        $user = User::where('id',$id)->with('posts')->first();

        $user['total_posts'] = $user->posts->count();
        $user['active_posts'] = Posts::where('user_id',$user->id)->where('status','active')->count();
        $user['pending_posts'] = Posts::where('user_id',$user->id)->where('status','pending')->count();
        $user['expired_posts'] = Posts::where('user_id',$user->id)->where('status','expired')->count();
        $user['refuse_posts'] = Posts::where('user_id',$user->id)->where('status','refuse')->count();

        return view('admin.user_information',compact('user'));

    }
//----------------------------------------------------------------------------------------------------------------------------------

    //delete user
    public function delete_user($id){

        User::where('id',$id)->delete();

        return redirect()->back()->with('message','the user was deleted successfully');

    }

//----------------------------------------------------------------------------------------------------------------------------------

    //get office links page
    public function get_office_links_page(){

        $links = OfficeLink::first();

        return view('admin.office_links',compact('links'));
    }

    //-----------------------------------------------------------------------

    //update links
    public function update_links(Request $request){

        OfficeLink::where('id',1)->update([
            'facebook' => $request->facebook ,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'mobile_phone' => $request->mobile_phone,
            'telephone' => $request->telephone,
            'gmail' => $request->email,
            'location' => $request->location,
        ]);

        return redirect()->back()->with('message','the links updated successfully');
    }

//---------------------------------------------------------------------------------------------------------------------

    //get the price&marchent page
    public function get_price_and_marchent_page(){

        $data = NumbersAndCost::first();

        return view('admin.price&marchent',compact('data'));
    } 

    //--------------------------------------------------------------------------------------

    public function update_data(Request $request){

        NumbersAndCost::where('id',1)->update([
            'cost_per_day' => $request->cost_per_day ,
            'merchant_account_number' => $request->merchant_account_number ,
        ]);

        return redirect()->back()->with('message','the data is updated successfully');
    }

//------------------------------------------------------------------------------------------------------------------------------------

    // this function to see the post in notification container individually
    public function show_post_from_notification($id){

        $posts = Posts::where('id',$id)->with('users')->with('postInfo')->with('images')->get();

        return view('admin.posts_setting',compact('posts'));
    }

//------------------------------------------------------------------------------------------------------------------------------------

    



































}
