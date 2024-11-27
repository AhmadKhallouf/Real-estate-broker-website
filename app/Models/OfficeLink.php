<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'mobile_phone',
        'telephone',
        'gmail',
        'location',
        
    ];
}
