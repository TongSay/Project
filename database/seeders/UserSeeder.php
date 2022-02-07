<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

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
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@borribo.com.kh',
            'email_verified_at' => null,
            'password' => bcrypt('Borribo@2021'),
            'address' => null,
            'mobile_number' => null,
            'department_id' => 1,
            'role_id' => 1,
            'designation' => 'CEO',
            'start_from' => '2021-09-14',
            'image' => 'avatar.png',
            'remember_token' => null,
            ],
            [
                'id' => 2,
                'name' => 'Say Tong',
                'email' => 'saytong@borribo.com.kh',
                'email_verified_at' => null,
                'password' => bcrypt('Borribo@2021'),
                'address' => null,
                'mobile_number' => null,
                'department_id' => 1,
                'role_id' => 2,
                'designation' => 'User',
                'start_from' => '2021-09-14',
                'image' => 'avatar.png',
                'remember_token' => null,
                ],

            
        ];
        User::insert($users);
    }
}
