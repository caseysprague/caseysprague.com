<?php

namespace App\Models;

use App\Models\ResumeJob;
use App\Models\ResumeSkill;
use App\Models\ResumeCompany;
use App\Models\ResumeEducation;
use App\Models\ResumeCertification;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $casts = [
        'name' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'website' => 'string',
        'introduction' => 'string',
    ];

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
