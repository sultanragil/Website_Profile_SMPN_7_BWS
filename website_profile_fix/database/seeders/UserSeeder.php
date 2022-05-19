<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'name' => 'Super Admin',
            'role' => 'super admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('12345678'),
            'image' => 'anon100px.png'
        ]);
    }
}
