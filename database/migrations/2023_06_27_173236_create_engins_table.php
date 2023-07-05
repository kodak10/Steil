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
        Schema::create('engins', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->unique();
            $table->string('description');
            $table->string('couverture');

            $table->unsignedBigInteger('categorie_engin_id');
            $table->foreign('categorie_engin_id')->references('id')->on('categorie_engins');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('engins');
    }
};
