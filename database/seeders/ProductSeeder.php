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
                'ProductCategoryID'=>"1",
                'Barcode'=>"5234",
                'ProductStatus'=>"new"
            ],
            [
                'ProductTitle'=>"Nike",
                'ProductCategoryID'=>"2",
                'Barcode'=>"2435",
                'ProductStatus'=>"new"
            ],
            [
                'ProductTitle'=>"Puma",
                'ProductCategoryID'=>"3",
                'Barcode'=>"5463",
                'ProductStatus'=>"new"
            ],
            [
                'ProductTitle'=>"Reebok",
                'ProductCategoryID'=>"4",
                'Barcode'=>"5987",
                'ProductStatus'=>"new"
            ],
            [
                'ProductTitle'=>"Kinetix",
                'ProductCategoryID'=>"5",
                'Barcode'=>"9521",
                'ProductStatus'=>"new"
            ],
        ]);
    }
}
