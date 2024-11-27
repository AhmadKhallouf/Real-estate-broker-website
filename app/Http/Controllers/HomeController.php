<?php

namespace App\Http\Controllers;

use App\Models\OfficeLink;
use App\Models\Posts;
use Illuminate\Http\Request;
use App\Models\User;


class HomeController extends Controller
{
    //this function display the home page to the unauthenticated users or gests
    public function index()
    {
        $posts = Posts::latest()->where('status','active')->with('postInfo')->with('images')->with('users:name,id,type')->take(3)->get();
        $officeInfo = OfficeLink::all();
        return view('welcomePage',compact('posts','officeInfo'));

    }

    //this function direct the user to the appropriate page : user or admin
    public function redirect(){

        $user_type = auth()->user()->type;

        if ($user_type == 'admin') {

            $posts = Posts::latest()->where('status','active')->with('users')->with('postInfo')->with('images')->take(3)->get();
            
            return view('admin.adminBoard',compact('posts'));
        } else {

        $posts = Posts::latest()->where('status','active')->with('users:id,name,type')->with('postInfo')->with('images')->take(3)->get();
        $officeInfo = OfficeLink::all();
        //return $posts->images[0]->image;
         return view('welcomePage',compact('posts','officeInfo'));
        }
        
    }


    


}
