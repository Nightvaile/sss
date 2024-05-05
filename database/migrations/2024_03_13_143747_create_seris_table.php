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
        Schema::create('seriler', function (Blueprint $table) {
            $table->id('seri_ID');
            $table->string('urun_adi');
            $table->string('seri_kodu')->unique();
            $table->string('urun_aciklama')->nullable()->default('Test');
            $table->unsignedBigInteger('kategori_id');
            $table->unsignedBigInteger('marka_id');
            $table->timestamps();


            $table->foreign('kategori_id')->references('kategori_ID')->on('kategoriler')
                ->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('marka_id')->references('marka_ID')->on('markalar')
                ->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seriler');
    }
};
