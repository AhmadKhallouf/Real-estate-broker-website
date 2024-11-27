<?php

namespace Database\Seeders;

use App\Models\NumbersAndCost;
use App\Models\OfficeLink;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OfficeLink::create([
        'facebook' => 'https://www.facebook.com',
        'twitter' => 'https://twitter.com',
        'linkedin' => 'https://www.linkedin.com',
        'instagram' => 'https://www.instagram.com',
        'mobile_phone' => '+963 935800669',
        'telephone' => '031 2620153',
        'gmail' => '25ahmad5khaloof25@gmail.com',
        'location' => 'Syria,Homs,Alhadara',
        ]);

        NumbersAndCost::create([
            'merchant_account_number' => '036587412',
            'cost_per_day' => 2000,
        ]);
    }
}
