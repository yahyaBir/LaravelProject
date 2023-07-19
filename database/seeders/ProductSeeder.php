<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ProductTable')->insert([

            [
                'ProductTitle'=>"Adidas",

                'ProductCategoryID'=>"",

                'Barcode'=>"",

                'ProductStatus'=>"new"

            ],

            [
                'ProductTitle'=>"Nike",

                'ProductCategoryID'=>"",

                'Barcode'=>"",

                'ProductStatus'=>"new"

            ],

            [
                'ProductTitle'=>"Puma",

                'ProductCategoryID'=>"",

                'Barcode'=>"",

                'ProductStatus'=>"new"

            ],

            [
                'ProductTitle'=>"Reebok",

                'ProductCategoryID'=>"",

                'Barcode'=>"",

                'ProductStatus'=>"new"

            ],

            [
                'ProductTitle'=>"Kinetix",

                'ProductCategoryID'=>"",

                'Barcode'=>"",

                'ProductStatus'=>"new"

            ],

        ]);
    }
}
