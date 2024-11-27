<?php

namespace App\Http\Livewire;

use App\Models\Posts;
use App\Models\User;
use Livewire\Component;

class Monitoring extends Component
{
    public function render()
    {
        return view('livewire.monitoring',[
            'active_posts' => Posts::where('status','active')->count(),
            'pending_posts' => Posts::where('status','pending')->count(),
            'expired_posts' => Posts::where('status','expired')->count(),
            'number_of_users' => User::where('type','user')->count(),
            'number_of_admins' => User::where('type','admin')->count(),
            'blocked_user' => User::where('active',0)->count()
        ]);
    }
}
