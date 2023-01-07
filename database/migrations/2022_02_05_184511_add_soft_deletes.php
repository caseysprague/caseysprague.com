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
        Schema::table('resume_certifications', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('resume_companies', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('resume_education', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('resume_jobs', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('resume_skills', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('resume_certifications', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('resume_companies', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('resume_education', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('resume_jobs', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('resume_skills', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
