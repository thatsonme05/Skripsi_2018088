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
        Schema::create('handphone', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->float('harga');
            $table->integer('ram');
            $table->integer('kapasitas_batrei');
            $table->float('tampilan_layar');
            $table->string('chipset');
            $table->integer('memori');
            $table->float('kamera');
            $table->timestamps();
        });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
