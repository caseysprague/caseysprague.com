<?php

namespace App;

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
        return $this->hasMany('App\ResumeCertification');
    }

    public function companies()
    {
        return $this->hasMany('App\ResumeCompany');
    }

    public function education()
    {
        return $this->hasMany('App\ResumeEducation');
    }

    public function jobs()
    {
        return $this->hasMany('App\ResumeJob');
    }

    public function skills()
    {
        return $this->hasMany('App\ResumeSkill');
    }
}
