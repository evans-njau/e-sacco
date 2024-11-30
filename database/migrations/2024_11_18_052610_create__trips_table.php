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
        Schema::create('_trips', function (Blueprint $table) {
            $table->id();
            $table->string('Trip_Name');
            $table->dateTime('Trip_Date');
            $table->integer('Number_of_seats');
            $table->float('price');
            $table->string('Description');
            $table->string('Destination_Image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_trips');
    }
};
