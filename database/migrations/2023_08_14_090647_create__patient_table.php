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
        Schema::create('_patient', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->enum('Gender', ['male', 'female', 'others'])
            ->default('others') // Optional: Set a default value if needed
            ->nullable(false);
            $table->integer('Age');
            $table->string('Phone_No', 11);
            $table->enum('Blood_Group', ['A+', 'A-','B+', 'B-','AB+', 'AB-','O+', 'O-','None'])
            ->default('None') // Optional: Set a default value if needed
            ->nullable(false);
            $table->integer('Current_Platelet');
            $table->integer('Lowest_Platelet');
            $table->string('Admited_Hospital');
            $table->unsignedBigInteger('Hospital_id');
            $table->decimal('Hospital_rating', 3, 2);
            $table->string('Password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_patient');
    }
};
