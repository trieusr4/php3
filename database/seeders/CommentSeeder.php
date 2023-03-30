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
                'posts_id'=>$i,
                'users_id'=>$i,
                'parent_id'=>$i,
                'content'=>"rat dep"
            ]);
        }
    }
}
