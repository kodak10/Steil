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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('engin_id')->nullable();
            $table->unsignedBigInteger('piece_id')->nullable();
            $table->unsignedBigInteger('realisation_id')->nullable();

            $table->string('chemin');


            $table->foreign('engin_id')->references('id')->on('engins')->onDelete('cascade');
            $table->foreign('piece_id')->references('id')->on('pieces')->onDelete('cascade');
            $table->foreign('realisation_id')->references('id')->on('realisations')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
