<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::insert([
            [
                'first_name' => 'Master',
                'last_name' => 'Admin',
                'email' => 'master@gmail.com',
                'role_id' => 1,
                'gender_id' => 1,
                'password' => Hash::make('1rahasia')
            ],
            [
                'first_name' => 'Slave',
                'last_name' => 'Admin',
                'email' => 'slave@gmail.com',
                'role_id' => 2,
                'gender_id' => 2,
                'password' => Hash::make('1rahasia')
            ],
        ]);
    }
}
