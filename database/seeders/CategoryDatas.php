<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryDatas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CategoryTable')->insert([

            [
                "CategoryTitle"=>"Shoes",

                "CategoryDescription"=>"Shoes are clothing items that people wear in their daily lives to protect,
                 support, and complement their style. Shoes come in different styles, materials, and purposes.",

                "Status"=>"active"


            ],

            [
                "CategoryTitle"=>"Pants",

                "CategoryDescription"=>"Pants are clothing items that cover and protect the lower body and legs of individuals,
                 while also complementing their style. Pants come in various styles, cuts, fabrics, and serve different purposes,
                 showcasing a diversity of options.",

                "Status"=>"active"


            ],

            [
                "CategoryTitle"=>"Shorts",

                "CategoryDescription"=>"Shorts are garments that are worn on the lower body, typically covering the hips and thighs.
                 They are characterized by their shorter length compared to trousers or pants. Shorts come in various styles, materials,
                 and designs, catering to different preferences and occasions.",

                "Status"=>"active"


            ],

            [
                "CategoryTitle"=>"Dresses",

                "CategoryDescription"=>"Dresses are garments that cover the upper body and extend down to various lengths,
                 typically reaching below the hips or knees. Dresses are versatile and come in a wide range of styles,
                 fabrics, and designs, catering to different occasions and personal preferences.",

                "Status"=>"active"


            ],

            [
                "CategoryTitle"=>"Shirts",

                "CategoryDescription"=>"Shirts are versatile garments worn on the upper body, typically with sleeves,
                 a collar, and buttons down the front. They come in various styles, fabrics, and designs,
                 catering to different purposes and fashion preferences.",

                "Status"=>"active"


            ],
        ]);
    }
}
