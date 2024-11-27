<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Images;
use App\Models\PostInfo;
use App\Models\User;

class Posts extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'type_of_investment',
        'type_of_real_estate',
        'space',
        'time_of_investment',
        'city',
        'town',
        'neighborhood',
        'village',
        'PointToIllustration',
        'description',
        'investment_value',
        'numberOfProcess',
        'time_of_ad',
        'status',
        'expires_at',

    ];

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function postInfo(){
        return $this->hasOne(PostInfo::class,'post_id');
    }

    public function images(){
        return $this->hasMany(Images::class,'post_id');
    }
}
