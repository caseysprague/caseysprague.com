<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumeSkill extends Model
{
    protected $casts = [
        'resume_id' => 'integer',
        'name' => 'string',
    ];

    public function resume()
    {
        return $this->hasOne('App\Resume');
    }
}
