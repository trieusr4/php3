<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiDuAnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('loai_du_an')->insert([
                'ten_loai_du_an'=>"BDS HCM",
                'id_du_an'=>1,
            ]);
            DB::table('loai_du_an')->insert([
            'ten_loai_du_an'=>"BDS HN",
            'id_du_an'=>2,
        ]);
}
    }
