<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumbersAndCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'merchant_account_number',
        'cost_per_day',
    ];
}
