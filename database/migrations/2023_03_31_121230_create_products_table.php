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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("title");
            $table->string("name");
            $table->float("price");
            $table->string("img");
            $table->text("description");
            // diện tích
            $table->float("acreage");
            // phòng ngủ
            $table->tinyInteger("bedroom");
            $table->tinyInteger("status");
            $table->bigInteger("user_id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
