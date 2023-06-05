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
        Schema::create('affectations', function (Blueprint $table) {
            $table->id();
            $table->string('navire');
            $table->string('n_visite');
            $table->unsignedBigInteger('shift_id');
            $table->foreign('shift_id')->references('id')->on('shifts')->onDelete('cascade');
            $table->unsignedBigInteger('porte_id');
            $table->foreign('porte_id')->references('id')->on('portes')->onDelete('cascade');
            $table->unsignedBigInteger('marchandise_id');
            $table->foreign('marchandise_id')->references('id')->on('marchandises')->onDelete('cascade');
            $table->string('grue');
            $table->string('tracteur');
            $table->string('chargeur');
            $table->string('elevateur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affectations');
    }
};
