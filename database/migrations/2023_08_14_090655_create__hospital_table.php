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
        Schema::create('_hospital', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('City');
            $table->decimal('Hospital_Rating',3, 2);
            $table->integer('Total_Seat');
            $table->string('Password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_hospital');
    }
};
