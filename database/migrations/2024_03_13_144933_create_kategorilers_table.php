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
        Schema::create('kategoriler', function (Blueprint $table) {
            $table->id('kategori_ID');
            $table->string('kategori_adi');
            $table->unsignedBigInteger('ust_kategori')->nullable();
            $table->timestamps();

            $table->foreign('ust_kategori')->references('kategori_ID')->on('kategoriler')
                ->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoriler');
    }
};
