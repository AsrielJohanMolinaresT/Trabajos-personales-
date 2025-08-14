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
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('mode', 45);
            $table->string('units', 45);
            $table->string('shift');
            $table->string('code_subject', 20)->unique();

            $table->integer('section_id')->unsigned();
            $table->foreign('section_id')->references('id')->on('sections')
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
        Schema::dropIfExists('subjects');
    }
};
