<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSoftDeletes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
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
     *
     * @return void
     */
    public function down()
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
}
