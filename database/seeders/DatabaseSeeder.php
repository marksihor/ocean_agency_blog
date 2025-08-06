<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Artisan::call('db:seed', array('--class' => OauthClientSeeder::class));
        Artisan::call('db:seed', array('--class' => CategorySeeder::class));
        Artisan::call('db:seed', array('--class' => UserSeeder::class));
    }
}
