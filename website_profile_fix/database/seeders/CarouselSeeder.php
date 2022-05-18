<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        if(DB::table('carousels')->count() == 0){
            DB::table('carousels')->insert([
                [
                'id' => '1',    
                'judul' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec elit ac tellus tincidunt mollis.',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec elit ac tellus tincidunt mollis. Integer vel turpis orci.',
                'image' => 'slides-1.jpg',
                ],
                [
                'id' => '2',
                'judul' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec elit ac tellus tincidunt mollis.',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec elit ac tellus tincidunt mollis. Integer vel turpis orci.',
                'image' => 'slides-2.jpg',
                ],
                [
                'id' => '3',
                'judul' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec elit ac tellus tincidunt mollis.',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse nec elit ac tellus tincidunt mollis. Integer vel turpis orci.',
                'image' => 'slides-2.jpg',
                ]
            ]);
        }
        
    }
}
