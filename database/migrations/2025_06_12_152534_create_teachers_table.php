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
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('code_teacher', 20)->unique();
            $table->string('identification_card', 20)->unique();
            $table->integer('age');
            $table->date('birthdate');
            $table->string('P_birth');
            $table->string('address');
            $table->string('gender', 9);
            $table->string('nationality');
            $table->string('ethnic');
            $table->string('telephone', 12)->unique();
            $table->string('responsible'); 
            $table->string('country');
            $table->string('mail')->unique();
            $table->string('department');
            $table->string('degree');
            $table->string('marital_status', 12);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
