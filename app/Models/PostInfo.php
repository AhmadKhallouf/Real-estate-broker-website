<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posts;

class PostInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'in_floor',
        'number_of_floors',
        'number_of_bedrooms',
        'number_of_living_rooms',
        'number_of_bathrooms',
        'model_of_kitchen',
    ];

    public function posts(){
        return $this->belongsTo(Posts::class,'id');
    }
}
