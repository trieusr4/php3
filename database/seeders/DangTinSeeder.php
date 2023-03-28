<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DangTinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
            DB::table('dang_tin')->insert([
                'tieu_de'=>"duong trung le",
                'id_hinh_thuc'=>"1",
                'dia_chi'=>"Ha namm",
                'gia'=>"124567",
                'dien_tich'=>"60m",
                'anh'=>"",
                'mat_tien'=>"4 mat",
                'so_phong_ngu'=>"4",
                'so_tang'=>"5",
                'noi_that'=>'day du',
                'ten_nguoi_dang_tin'=>'trieu',
                'sdt_nguoi_dang_tin'=>'0987654',
                'email_nguoi_dang_tin'=>'0987654',
                'id_users'=>1,
            ]);
    }
}
