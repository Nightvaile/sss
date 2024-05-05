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
        Schema::create('urunler', function (Blueprint $table) {
            $table->id('urun_ID'); /*->startingValue(868111000000)*/
            $table->bigInteger('barkod_NO')->unique()->unsigned();
            $table->unsignedBigInteger('seri_id');
            $table->decimal('fiyat', 10, 2);
            $table->integer('adet');
            $table->integer('min_adet_bildirimi')->default('10');
            $table->unsignedBigInteger('renk_id');
            $table->unsignedBigInteger('beden_id');
            $table->timestamps();

            $table->foreign('seri_id')->references('seri_ID')->on('seriler')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('renk_id')->references('renk_ID')->on('renkler')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('beden_id')->references('beden_ID')->on('bedenler')
                ->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urunler');
    }
};
