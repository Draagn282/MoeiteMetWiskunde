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
        Schema::create('Beheerder', function (Blueprint $table) {
            $table->string('wachtwoord1');
            $table->integer('beheer');
        });

        Schema::create('Leerlingen', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('email')->unique();
            $table->string('opmerkingen');
        });

        Schema::create('Rooster', function (Blueprint $table) {
            $table->id();
            $table->dateTime('startTijd');
            $table->dateTime('eindTijd');
            $table->foreignId('leerlingId')->references('id')->on('Leerlingen')->onDelete('cascade');
            $table->string('opmerkingen');
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
