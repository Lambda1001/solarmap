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
        Schema::create('stars', function (Blueprint $table) {
            $table->id();
            $table->string('starId');
            $table->string('starName');
            $table->string('bodyType');
            $table->float('starMeanRadius');
            $table->float('massValue');
            $table->unsignedInteger('massExponent');
            $table->float('starGravity');
            $table->string('planet_id')->nullable();
            $table->timestamps();

            $table->index('planetId');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stars');
    }
};
