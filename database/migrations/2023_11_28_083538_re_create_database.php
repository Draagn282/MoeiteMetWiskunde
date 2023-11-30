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
        Schema::create('Beheer', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('wachtwoord');
            $table->dateTime('laatsteLogin');
            $table->string('email');
        });

        Schema::create('Leerling', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('email')->unique();
            $table->string('niveau');
            $table->dateTime('startDatum');
            $table->dateTime('eindDatum');
            $table->string('opmerkingen');
        });
        Schema::create('Les', function (Blueprint $table) {
            $table->id();
            $table->time('startTijd');
            $table->time('eindTijd');
            $table->date('Datum');
            $table->string('opmerkingen');
        });
        Schema::create('Planning', function (Blueprint $table) {
            $table->foreignId('LeerlingId')->references('id')->on('Leerling')->onDelete('cascade');
            $table->foreignId('LesId')->references('id')->on('Les')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Beheer');
        Schema::dropIfExists('Leerling');
        Schema::dropIfExists('Les');
        Schema::dropIfExists('Planning');
    }
};
