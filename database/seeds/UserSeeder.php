<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Çağlar Karakoç',
                'email' => 'info@caglarkarakoc.com',
                'password' => Hash::make('123456')
            ],
            [
                'name' => 'Sanctum User 1',
                'email' => 'sanctum@laravel.com',
                'password' => Hash::make('123456')
            ],
            [
                'name' => 'Sanctum User 2',
                'email' => 'sanctum2@laravel.com',
                'password' => Hash::make('123456')
            ],            
        ];

        foreach ($users as $user) {
            User::insert($user);
        }
    }
}
