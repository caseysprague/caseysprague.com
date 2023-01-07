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
        Schema::create('resume_certifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resume_id')->unsigned();
            $table->string('name');
            $table->text('description')->nullable();
            $table->date('certificated_on')->nullable();
            $table->date('expires_on')->nullable();
            $table->timestamps();

            $table->foreign('resume_id')->references('id')->on('resumes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resume_certifications');
    }
};
