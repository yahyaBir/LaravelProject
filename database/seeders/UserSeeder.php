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
        \DB::table('usertable')->insert([
            [
                'username'=>"yahya",
                'usertitle'=>"Yahya BİR",
                'password'=>bcrypt("123456"),
            ],
            [
                'username'=>"ahmet",
                'usertitle'=>"Ahmet Can DERİCİOĞLU",
                'password'=>bcrypt("1234567"),
            ],
            [
                'username'=>"serra",
                'usertitle'=>"Serra ÇAPRAZ",
                'password'=>bcrypt("12345678"),
            ],
        ]);
    }
}
