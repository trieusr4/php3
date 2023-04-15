<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0;$i<5;$i++){
            DB::table('users')->insert([
                'name'=>"Meow",
                'email'=>"trieu@gmail.com",
                'password'=>bcrypt('123456'),
                'role'=>1
            ]);
    }
}}
