<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    public function certifications()
    {
        return $this->hasMany(ResumeCertification::class);
    }

    public function companies()
    {
        return $this->hasMany(ResumeCompany::class);
    }

    public function education()
    {
        return $this->hasMany(ResumeEducation::class);
    }

    public function jobs()
    {
        return $this->hasMany(ResumeJob::class);
    }

    public function skills()
    {
        return $this->hasMany(ResumeSkill::class);
    }
}
