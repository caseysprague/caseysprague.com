<?php

namespace App\Models;

use App\Models\Resume;
use Illuminate\Database\Eloquent\Model;

class ResumeSkill extends Model
{
    protected $casts = [
        'resume_id' => 'integer',
        'name' => 'string',
    ];

    public function resume()
    {
        return $this->hasOne(Resume::class);
    }
}
