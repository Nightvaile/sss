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
            $table->unsignedBigInteger('urun_id');
            $table->unsignedBigInteger('teslim_alan');
            $table->unsignedBigInteger('tedarikci');
//            $table->unsignedBigInteger('teslim_alan');
            $table->unsignedBigInteger('sube_id');
            $table->enum('haraket_tipi', ['Transfer', 'Alış', 'Satış', 'İade', 'Değişim'])->default('Transfer');
            $table->integer('stok_adeti');
            $table->decimal('birim_fiyat', 10, 2)->nullable();
            $table->decimal('total_fiyat', 20, 2)->nullable();
            $table->text('not')->nullable();
            $table->timestamps();

            $table->foreign('urun_id')->references('urun_ID')->on('urunler')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('teslim_alan')->references('id')->on('users')
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('tedarikci')->references('tedarikci_ID')->on('tedarikciler')
                ->cascadeOnUpdate()->cascadeOnDelete();
//            $table->foreign('teslim_alan')->references('sube_ID')->on('subeler')
//                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('sube_id')->references('sube_ID')->on('subeler')
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
