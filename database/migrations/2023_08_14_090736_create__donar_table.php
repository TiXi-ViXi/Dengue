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
        Schema::create('_donar', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->integer('Age');
            $table->enum('Gender', ['male', 'female', 'others'])
            ->default('others') // Optional: Set a default value if needed
            ->nullable(false);
            $table->string('City');
            $table->string('Phone');
            $table->enum('Blood_Group', ['A+', 'A-','B+', 'B-','AB+', 'AB-','O+', 'O-','None'])
            ->default('None') // Optional: Set a default value if needed
            ->nullable(false);
            $table->date('Last_Donation_date');
            $table->Boolean('Availabilty');
            $table->string('Password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_donar');
    }
};
