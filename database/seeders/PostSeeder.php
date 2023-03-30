<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0;$i<5;$i++){
            DB::table('posts')->insert([
                'investors'=>"trieu".$i,
                'category_id'=>$i,
                'address'=>"Ha noi".$i,
                'image'=>"",
                'des'=>"rat la dep",
                "status"=>"haon thanh",
                'users_id'=>$i
            ]);
        }
    }
}
