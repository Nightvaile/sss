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
        Schema::create('stoklar', function (Blueprint $table) {
            $table->id('stok_ID');
            $table->unsignedBigInteger('urun_id');
            $table->unsignedBigInteger('sube_id');
            $table->integer('stok');
            $table->integer('stok_bildirimi')->default('10');

            $table->timestamps();

            $table->foreign('urun_id')->references('urun_ID')->on('urunler')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('sube_id')->references('sube_ID')->on('subeler')
                ->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stoklar');
    }
};
