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
        Schema::create('tuitions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('e_center');
            $table->datetime('D_tuition');
            $table->string('type');
            $table->string('semester');
            $table->string('year', 4);

            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('career_id')->unsigned();
            $table->foreign('career_id')->references('id')->on('careers')
            ->onDelete('cascade')->onUpdate('cascade');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuitions');
    }
};
