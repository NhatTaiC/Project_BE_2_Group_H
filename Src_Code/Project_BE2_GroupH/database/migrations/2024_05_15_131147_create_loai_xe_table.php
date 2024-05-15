<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('loaixe', function (Blueprint $table) {
            $table->increments('loaixe_id')->unique();
            $table->string('maloaixe', 100)->unique();
            $table->string('tenloaixe', 100);
            $table->string('namsx', 100);
            $table->string('quocgia', 100);
            $table->string('mota', 100);
            $table->string('hinhanh', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loaixe');
    }
};
