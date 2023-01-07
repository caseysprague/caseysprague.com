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
        Schema::create('resume_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resume_id')->unsigned();
            $table->integer('company_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->date('started_on');
            $table->date('ended_on')->nullable();
            $table->timestamps();

            $table->foreign('resume_id')->references('id')->on('resumes')->onDelete('cascade');
            $table->foreign('company_id')->references('id')->on('resume_companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resume_jobs');
    }
};
