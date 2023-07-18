<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductDatas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ProductTable')->insert([

            [
                "ProductTitle"=>"Adidas",

                "ProductCategoryID"=>"",

                "Barcode"=>"",

                "Product Status"=>"new"

            ],

            [
                "ProductTitle"=>"Nike",

                "ProductCategoryID"=>"",

                "Barcode"=>"",

                "Product Status"=>"new"

            ],

            [
                "ProductTitle"=>"Puma",

                "ProductCategoryID"=>"",

                "Barcode"=>"",

                "Product Status"=>"new"

            ],

            [
                "ProductTitle"=>"Reebok",

                "ProductCategoryID"=>"",

                "Barcode"=>"",

                "Product Status"=>"new"

            ],

            [
                "ProductTitle"=>"Kinetix",

                "ProductCategoryID"=>"",

                "Barcode"=>"",

                "Product Status"=>"new"

            ],

        ]);
    }
}
