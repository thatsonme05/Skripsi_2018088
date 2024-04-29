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
        Schema::create('perbandingan_kriteria', function (Blueprint $table) {
            $table->id();
            $table->string('kriteria1');
            $table->string('kriteria2');
            $table->double('nilai_perbandingan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perbandingan_kriteria');
    }
};
