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
        Schema::create('stok_haraketleri', function (Blueprint $table) {
            $table->id('stok_haraketi_ID');
            $table->text('not')->nullable();
            $table->unsignedBigInteger('urun_id');
            $table->unsignedBigInteger('personel_id');
            $table->unsignedBigInteger('gondereci');
            $table->unsignedBigInteger('alici');
            $table->enum('haraket_tipi', ['Transfer', 'Alış', 'Satış', 'İade', 'Değişim'])->default('Transfer');
            $table->integer('stok_adeti');
            $table->decimal('birim_fiyat', 10, 2)->nullable();
            $table->decimal('total_fiyat', 20, 2)->nullable();
            $table->timestamps();

            $table->foreign('urun_id')->references('urun_ID')->on('urunler')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('personel_id')->references('id')->on('users')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('gondereci')->references('sube_ID')->on('subeler')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('alici')->references('sube_ID')->on('subeler')
                ->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok_haraketleri');
    }
};
