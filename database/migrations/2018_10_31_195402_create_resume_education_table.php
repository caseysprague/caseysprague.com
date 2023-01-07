<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resume_education', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resume_id')->unsigned();
            $table->string('institution_name');
            $table->string('institution_location');
            $table->string('major')->nullable();
            $table->string('minor')->nullable();
            $table->string('gpa')->nullable();
            $table->text('description');
            $table->date('started_on')->nullable();
            $table->date('ended_on')->nullable();
            $table->timestamps();

            $table->foreign('resume_id')->references('id')->on('resumes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resume_education');
    }
};
