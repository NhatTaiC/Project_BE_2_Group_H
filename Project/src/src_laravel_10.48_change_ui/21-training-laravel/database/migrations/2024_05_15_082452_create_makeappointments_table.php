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
        Schema::create('makeappointments', function (Blueprint $table) {
            $table->increments('makeappointments_id');
            $table->string('MaLH');
            $table->string('TenKH');
            $table->string('SoDTKH');
            $table->string('MaLoaiXe');
            $table->string('TrangThai');
            $table->string('YeuCau');
            $table->string('HinhAnh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makeappointments');
    }
};
