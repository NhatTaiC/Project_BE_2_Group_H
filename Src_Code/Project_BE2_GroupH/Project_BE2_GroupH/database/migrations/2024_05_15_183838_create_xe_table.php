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
        Schema::create('xe', function (Blueprint $table) {
            //$table->id();
            $table->increments('xe_id')->unique();
            $table->string('maxe', 100)->unique();
            $table->string('tenxe', 100);
            $table->string('giaxe', 100);
            $table->string('mauxe', 100);
            $table->string('sochongoi', 100);
            $table->string('dongco', 100);
            $table->string('dungtichbinhxang', 100);
            $table->string('hinhanhxe', 100);
            $table->string('maloaixe', 100)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xe');
    }
};
