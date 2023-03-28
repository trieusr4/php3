<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnhDuAnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('anh_du_an')->insert([
            'link_anh'=>"https://picsum.photos/100/100",
            'id_du_an'=>1,
        ]);
        DB::table('anh_du_an')->insert([
            'link_anh'=>"https://picsum.photos/100/100",
            'id_du_an'=>2,
        ]);
    }
}
