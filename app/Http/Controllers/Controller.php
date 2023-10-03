<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Notification as FacadesNotification;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function markAllNotUserAR(){
        $user = User::find(auth()->user()->id);
        foreach($user->unreadNotifications as $notifications){
            $notifications->markAsRead();
        }
        return view('user.userPage');
    }
    
}
