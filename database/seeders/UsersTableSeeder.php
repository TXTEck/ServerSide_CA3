<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Qwerty123!'), 
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Normal User',
            'email' => 'user@user.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), 
            'role' => 'user',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
