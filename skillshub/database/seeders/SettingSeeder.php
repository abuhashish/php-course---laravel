<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;


class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Setting::create([
           'email'=>'contact@skillshub.com',
           'phone'=>'0599200465',
           'facebook'=>'www.facebook.com',
           'twiiter'=>'www.twitter.com',
           'instagram'=>'www.twitter.com',
           'linkedin'=>'www.twitter.com',

       ]);
    }
}
