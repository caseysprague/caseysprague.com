<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumeCompany extends Model
{
    protected $casts = [
        'resume_id' => 'integer',
        'name' => 'string',
        'location' => 'string',
        'started_on' => 'date',
        'ended_on' => 'date',
    ];

    public function resume()
    {
        return $this->hasOne('App\Resume');
    }

    public function jobs()
    {
        return $this->hasMany('App\ResumeJob', 'company_id');
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
