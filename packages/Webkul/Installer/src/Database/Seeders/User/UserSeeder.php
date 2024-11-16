<?php

namespace Webkul\Installer\Database\Seeders\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @param  array  $parameters
     * @return void
     */
    public function run($parameters = [])
    {
        $email = env('USER_EMAIL', 'admin@example.com');

        if ($email) {
            $user = DB::table('users')->where('email', $email)->first();

            if (!$user) {
                DB::table('users')->insert([
                    'name'            => env('USER_NAME', 'Root User'),
                    'email'           => $email,
                    'password'        => bcrypt(env('USER_PASSWORD', \Str::password(18, true, true))),
                    // 'api_token'       => Str::random(80),
                    'created_at'      => now(),
                    'updated_at'      => now(),
                    'status'          => 1,
                    'role_id'         => 1,
                    'view_permission' => 'global',
                ]);

                return;
            }

            \Log::info("Root User Already exists");
        }
    }
}
