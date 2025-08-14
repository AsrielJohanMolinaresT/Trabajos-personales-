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
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('code_student', 20)->unique();
            $table->string('identification_card', 20)->unique()->nullable();
            $table->integer('age');
            $table->date('date_birth');
            $table->string('P_birth', );
            $table->string('address');
            $table->string('gender', 10);
            $table->string('nacionality');
            $table->string('ethnic');
            $table->string('telephone', 12)->unique()->nullable();
            $table->string('country');
            $table->string('email')->unique();
            $table->string('department');
            $table->string('municipilaty');
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
        Schema::dropIfExists('students');
    }
};
