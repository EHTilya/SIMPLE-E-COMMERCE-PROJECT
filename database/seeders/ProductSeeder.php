<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'name'=>'Samsung mobile',
                    'price'=>"500",
                    'category'=>'Mobile',
                    'description'=>'A smartphone with 16Gb and high camera quality',
                    'gallery'=>'images/family1.jpg'
        
                ],
                [
                    'name'=>'Apple Tv',
                    'price'=>"700",
                    'category'=>'Television',
                    'description'=>'A Tv with curved screen and HD ',
                    'gallery'=>'images/land.jpg'
        
                ],
                p,
                [
                    'name'=>'White skirt',
                    'price'=>"Tsh 20000",
                    'category'=>'Women',
                    'description'=>'Skirt ya rangi nyeupe ',
                    'gallery'=>'public/image/skirt3.jpg'
        
                ]
            ]
         );
    }
}
