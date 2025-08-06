<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OauthClientSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('oauth_clients')->insertOrIgnore([
            [
                'id' => 1,
                'user_id' => null,
                'name' => 'Laravel Personal Access Client',
                'secret' => 'RfBz23jGiKIZ6oRp4umyuSutRJYA0FX02cdflI3H',
                'provider' => null,
                'redirect' => 'http://localhost',
                'personal_access_client' => true,
                'password_client' => false,
                'revoked' => false,
                'created_at' => '2025-08-06 08:35:12',
                'updated_at' => '2025-08-06 08:35:12'
            ],
            [
                'id' => 2,
                'user_id' => null,
                'name' => 'Laravel Password Grant Client',
                'secret' => '3Bc2wflV3JHZbZ6egMuPvWIVv4LHcYCq3MyGVid8',
                'provider' => 'users',
                'redirect' => 'http://localhost',
                'personal_access_client' => false,
                'password_client' => true,
                'revoked' => false,
                'created_at' => '2025-08-06 08:35:12',
                'updated_at' => '2025-08-06 08:35:12'
            ]
        ]);
    }
}
