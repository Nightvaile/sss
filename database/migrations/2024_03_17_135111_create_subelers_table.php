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
        Schema::create('subeler', function (Blueprint $table) {
            $table->id('sube_ID');
            $table->string('sube_adi');
            $table->string('adres');
            $table->unsignedBigInteger('yetkili_kisi');
            $table->string('sube_tel', 15);
            $table->timestamps();

            $table->foreign('yetkili_kisi')->references('id')->on('users')
                ->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subeler');
    }
};
