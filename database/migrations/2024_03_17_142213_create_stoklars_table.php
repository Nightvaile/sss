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
            $table->unsignedBigInteger('barkod_no');
            $table->unsignedBigInteger('sube_id');
            $table->integer('stok_sayisi');
            $table->timestamps();

            $table->foreign('barkod_no')->references('barkod_NO')->on('urunler')
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
