<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0;$i<5;$i++){
            DB::table('comments')->insert([
                'product_id'=>1,
                'user_id'=>1,
                'parent_id'=>$i,
                'content'=>"rat dep"
            ]);
        }
    }
}
