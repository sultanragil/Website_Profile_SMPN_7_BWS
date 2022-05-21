<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kontak;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kontak::create([
            'no' => '+6287721675298',
            'alamat' => 'Jl.Diponegoro No.121, Kabupaten Bondowoso, Jawa Timur 68219',
            'gmail' => 'smpn7@gmail.com',
            'fb' => 'https://www.facebook.com/',
            'yt' => 'https://www.youtube.com/',
            'open' => 'Sen - Sab : 07:00 - 16:00',
        ]);
    }
}
