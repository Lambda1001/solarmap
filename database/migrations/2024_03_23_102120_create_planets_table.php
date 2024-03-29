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
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->string('planetId');
            $table->unsignedInteger('star_id');
            $table->string('planetName');
            $table->string('bodyType');
            $table->float('planetSemimajorAxis');
            $table->float('planetPerihelion');
            $table->float('planetAphelion');
            $table->float('planetMeanRadius');
            $table->float('massValue');
            $table->unsignedInteger('massExponent');
            $table->float('planetGravity');
            $table->mediumText('planetDescription');
            $table->string('planetImage')->nullable();
            $table->timestamps();

            $table->index('star_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planets');
    }
};
