<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'sejarah' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec elit ac tellus tincidunt mollis. Integer vel turpis orci. Nulla ante nulla, dignissim vel scelerisque vel, molestie a ipsum. Pellentesque suscipit maximus neque et sollicitudin. Fusce eu rhoncus justo. Donec lacus nunc, consectetur eget euismod in, pulvinar vitae nunc. Etiam semper leo eu enim volutpat, at eleifend felis hendrerit. Phasellus vulputate libero eros, eu dictum sem luctus et. Phasellus sed tincidunt ex. Nunc id lobortis sem. Donec tempor quam eget mattis vestibulum. Maecenas volutpat mi et facilisis varius. Vestibulum ut posuere enim.',
            'sekolah_img' => 'slides-1.jpg',
            'visi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec elit ac tellus tincidunt mollis. Integer vel turpis orci. Nulla ante nulla, dignissim vel scelerisque vel, molestie a ipsum. Pellentesque suscipit maximus neque et sollicitudin. Fusce eu rhoncus justo. Donec lacus nunc, consectetur eget euismod in, pulvinar vitae nunc. Etiam semper leo eu enim volutpat, at eleifend felis hendrerit. Phasellus vulputate libero eros, eu dictum sem luctus et. Phasellus sed tincidunt ex. Nunc id lobortis sem. Donec tempor quam eget mattis vestibulum. Maecenas volutpat mi et facilisis varius. Vestibulum ut posuere enim.',
            'misi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec elit ac tellus tincidunt mollis. Integer vel turpis orci. Nulla ante nulla, dignissim vel scelerisque vel, molestie a ipsum. Pellentesque suscipit maximus neque et sollicitudin. Fusce eu rhoncus justo. Donec lacus nunc, consectetur eget euismod in, pulvinar vitae nunc. Etiam semper leo eu enim volutpat, at eleifend felis hendrerit. Phasellus vulputate libero eros, eu dictum sem luctus et. Phasellus sed tincidunt ex. Nunc id lobortis sem. Donec tempor quam eget mattis vestibulum. Maecenas volutpat mi et facilisis varius. Vestibulum ut posuere enim.',
            'logo' => 'logo-fix.png',
            'arti_logo' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec elit ac tellus tincidunt mollis. Integer vel turpis orci. Nulla ante nulla, dignissim vel scelerisque vel, molestie a ipsum. Pellentesque suscipit maximus neque et sollicitudin. Fusce eu rhoncus justo. Donec lacus nunc, consectetur eget euismod in, pulvinar vitae nunc. Etiam semper leo eu enim volutpat, at eleifend felis hendrerit. Phasellus vulputate libero eros, eu dictum sem luctus et. Phasellus sed tincidunt ex. Nunc id lobortis sem. Donec tempor quam eget mattis vestibulum. Maecenas volutpat mi et facilisis varius. Vestibulum ut posuere enim.',
            'kepsek_img' => 'anon100px.png',
            'kepsek_nama' => 'Gendot Budiyono',
            'wakepsek1_img' => 'anon100px.png',
            'wakepsek1_nama' => 'Sulton Mubarok',
            'wakepsek2_img' => 'anon100px.png',
            'wakepsek2_nama' => 'Aziz Rahmawan'
        ]);
    }
}
