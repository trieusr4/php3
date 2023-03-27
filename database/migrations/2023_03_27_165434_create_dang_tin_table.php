<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dang_tin', function (Blueprint $table) {
            $table->id();
            $table->string('tieu_de');
            $table->bigInteger('id_hinh_thuc');
            $table->string('dia_chi');
            $table->string('gia');
            $table->string('dien_tich');
            $table->string('anh');
            $table->string('mat_tien');
            $table->string('so_phong_ngu');
            $table->string('so_tang');
            $table->string('noi_that');
            $table->string('ten_nguoi_dang_tin');
            $table->string('sdt_nguoi_dang_tin');
            $table->string('email_nguoi_dang_tin');
            $table->bigInteger('id_users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dang_tin');
    }
};
