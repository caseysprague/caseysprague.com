<?php

namespace App;

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
        return $this->hasOne('App\Resume');
    }

    public function company()
    {
        return $this->belongsTo('App\ResumeCompany');
    }
}
