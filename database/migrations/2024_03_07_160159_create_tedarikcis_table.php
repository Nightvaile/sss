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
        Schema::create('tedarikciler', function (Blueprint $table) {
            $table->id('tedarikci_ID');
            $table->string('firma_adi');
            $table->string('firma_tel','11');
            $table->string('yetkili_kisi');
            $table->string('yetkili_tel','11')->nullable();
            $table->string('adres');
            $table->string('email')->unique();
            $table->text('odeme_bilgileri')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tedarikciler');
    }
};
