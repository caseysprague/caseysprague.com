<?php

namespace App\Models;

use App\Models\Resume;
use App\Models\ResumeCompany;
use Illuminate\Database\Eloquent\Model;

class ResumeJob extends Model
{
    protected $casts = [
        'resume_id' => 'integer',
        'company_id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'started_on' => 'date',
        'ended_on' => 'date',
    ];

    public function resume()
    {
        return $this->hasOne(Resume::class);
    }

    public function company()
    {
        return $this->belongsTo(ResumeCompany::class);
    }
}
