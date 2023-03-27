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
        Schema::create('du_an', function (Blueprint $table) {
            $table->id();
            $table->string('ten_du_an');
            $table->string('chu_dau_tu');
            $table->string('trang_thai_du_an');
            $table->bigInteger('id_loai_du_an');
            $table->string('dia_chi');
            // $table->comment('anh_du_an');
            $table->string('thong_tin');
            $table->string('mat_tien');
            $table->string('so_phong_ngu');
            $table->string('so_tang');
            $table->string('noi_that');
            $table->bigInteger('id_users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('du_an');
    }
};
