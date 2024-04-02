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
        Schema::create('material_location', function (Blueprint $table) {
            $table->id();
            $table->integer('material_id');
            $table->smallInteger('location_id');
            $table->decimal('price', 10, 2)->nullable();
            $table->smallInteger('material_status_id');  
            $table->smallInteger('availability_id');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material_location');
    }
};
