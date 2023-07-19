<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('UserTable')->insert([
            [
                'Username'=>"yahya",

                'UserTitle'=>"Yahya BİR",

                'Password'=>"123456",
            ],

            [
                'Username'=>"ahmet",

                'UserTitle'=>"Ahmet Can DERİCİOĞLU",

                'Password'=>"1234567",
            ],

            [
                'Username'=>"serra",

                'UserTitle'=>"Serra ÇAPRAZ",

                'Password'=>"123456789",
            ],
        ]);
    }
}
