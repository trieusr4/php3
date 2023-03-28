<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TinTucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0;$i<5;$i++){
            DB::table('tin_tuc')->insert([
                'tieu_de'=>"duong",
                'anh'=>"",
                'mo_ta'=>"Cai cho nay rat dep",
                'id_loai_tin_tuc'=>"1",
                'id_users'=>$i,
            ]);
    }
    }
}
