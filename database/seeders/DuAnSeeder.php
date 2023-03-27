<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DuAnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0;$i<5;$i++){
            DB::table('du_an')->insert([
                'ten_du_an'=>"duong",
                'chu_dau_tu'=>"trung",
                'trang_thai_du_an'=>"dang xay",
                'id_loai_du_an'=>$i,
                'dia_chi'=>"Thai binh",
                'thong_tin'=>"thai thuy",
                'mat_tien'=>"4 mat",
                'so_phong_ngu'=>"4",
                'so_tang'=>"5",
                'noi_that'=>'day du',
                'id_users'=>$i,
            ]);
    }
}
}