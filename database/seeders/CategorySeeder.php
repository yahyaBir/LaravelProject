<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('CategoryTable')->insert([
            [
                'CategoryTitle'=>"Shoes",
                'CategoryDescription'=>"Shoes are clothing items that people wear in their daily lives to protect,
                 support, and complement their style.",
                'Status'=>"active"
            ],
            [
                'CategoryTitle'=>"Pants",
                'CategoryDescription'=>"Pants are clothing items that cover and protect the lower body and legs of individuals,
                 while also complementing their style.",
                'Status'=>"active"
            ],
            [
                'CategoryTitle'=>"Shorts",
                'CategoryDescription'=>"Shorts are garments that are worn on the lower body, typically covering the hips and thighs.
                 They are characterized by their shorter length compared to trousers or pants..",
                'Status'=>"active"
            ],
            [
                'CategoryTitle'=>"Dresses",
                'CategoryDescription'=>"Dresses are garments that cover the upper body and extend down to various lengths,
                 typically reaching below the hips or knees.",
                'Status'=>"active"
            ],
            [
                'CategoryTitle'=>"Shirts",
                'CategoryDescription'=>"Shirts are versatile garments worn on the upper body, typically with sleeves,
                 a collar, and buttons down the front.",
                'Status'=>"active"
            ],
        ]);
    }
}
