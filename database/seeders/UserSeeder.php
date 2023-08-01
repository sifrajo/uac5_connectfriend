<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'user1',
            'email'=>'user1@gmail.com',
            'password'=>'12345678',
            'gender' => 'P',
            'hobbies' => 'makan',
            'instagram' => 'sifrajo',
            'phone' => '08123',
            'image' => 'IMG_0620'
        ]);

        DB::table('users')->insert([
            'name'=>'user2',
            'email'=>'user2@gmail.com',
            'password'=>'12345678',
            'gender' => 'L',
            'hobbies' => 'makan',
            'instagram' => 'sifrajo',
            'phone' => '08123',
            'image' => 'IMG_8388'
        ]);
    }
}
