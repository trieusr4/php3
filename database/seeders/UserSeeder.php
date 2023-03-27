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
                'ten'=>"Meow",
                'sdt'=>'0987654321',
                'mat_khau'=>bcrypt('123456'),
                'dia_chi'=>"ha nam",
                'email'=>'trieuthph18663'.$i,
                'role'=>1,
            ]);
    }
}}
