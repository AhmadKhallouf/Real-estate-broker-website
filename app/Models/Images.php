<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posts;

class Images extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'image',
    ];

    public function posts(){
        return $this->belongsTo(Posts::class,'id');
    }
}
