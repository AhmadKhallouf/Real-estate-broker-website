<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'userID',
        'business',
        'type',
        'price',
        'timeOfInv',
        'city',
        'town',
        'village',
        'PointToIllustration',
        'numberOfRealEstate',
        'pathOfPhotos',
        'numberOfProcess',
        'accept',

    ];

    public function users(){
        return $this->belongsTo(User::class,'userID');
    }
}
