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
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('note', 45);
            $table->string('type');
            $table->string('semester', 45);
            $table->string('code_note', 20)->unique();

            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students')
            ->onDelete('cascade')->onUpdate('cascade');

             $table->integer('teacher_id')->unsigned();
             $table->foreign('teacher_id')->references('id')->on('teachers')
            ->onDelete('cascade')->onUpdate('cascade');

             $table->integer('subject_id')->unsigned();
             $table->foreign('subject_id')->references('id')->on('subjects')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
