<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HinhThucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hinh_thuc')->insert([
            'ten_hinh_thuc'=>"cho thue",
            'id_dang_tin'=>1,
        ]);
        DB::table('hinh_thuc')->insert([
        'ten_hinh_thuc'=>"nha o",
        'id_dang_tin'=>2,
        ]);
    }
}
