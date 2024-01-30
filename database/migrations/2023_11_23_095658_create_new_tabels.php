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
        Schema::create('Lesuren', function (Blueprint $table) {
            $table->id();
            $table->integer('Dag');
            $table->time('StartUurVanDag');
            $table->time('EindUurVanDag');
            $table->integer('Status');
        });
        Schema::create('Recenties', function (Blueprint $table) {
            $table->id();
            $table->string('Naam');
            $table->string('Text');
            $table->integer('Goedkeuring');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Lesuren');
        Schema::dropIfExists('Recenties');
    }
};