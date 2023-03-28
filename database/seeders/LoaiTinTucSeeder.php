<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiTinTucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
            DB::table('loai_tin_tuc')->insert([
                'ten_loai_tin_tuc'=>"tin tuc nhanh",
                'id_tin_tuc'=>1,
            ]);
            DB::table('loai_tin_tuc')->insert([
                'ten_loai_tin_tuc'=>"tin tuc cham",
                'id_tin_tuc'=>2,
            ]);
    }
}
