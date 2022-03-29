<?php

namespace App\Models;

use App\Models\Resume;
use App\Models\ResumeJob;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResumeCompany extends Model
{
    use SoftDeletes;

    protected $casts = [
        'resume_id' => 'integer',
        'name' => 'string',
        'location' => 'string',
        'started_on' => 'date',
        'ended_on' => 'date',
    ];

    public function resume()
    {
        return $this->hasOne(Resume::class);
    }

    public function jobs()
    {
        return $this->hasMany(ResumeJob::class, 'company_id');
    }

    public function getStartedOnAttribute()
    {
        return $this->jobs->sortBy('started_on')->first()->started_on;
    }

    public function getEndedOnAttribute()
    {
        return $this->jobs->sortBy('started_on')->last()->ended_on;
    }
}
