<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('lesuren', function (Blueprint $table) {
            $table->id();
            $table->enum('dag', ['1_Monday', '2_Tuesday', '3_Wednesday', '4_Thursday', '5_Friday', '6_Saturday', '7_Sunday']);
            $table->string('start_time');
            $table->string('end_time');
            $table->enum('status', ['vrij', 'genomen', 'niet mogelijk'])->default('niet mogelijk');
            $table->timestamps();
        });

        Schema::create('recenties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('text');
            $table->boolean('approval')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('lesuren');
        Schema::dropIfExists('reviews');
    }
};
