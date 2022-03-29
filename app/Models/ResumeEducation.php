<?php

namespace App\Models;

use App\Models\Resume;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResumeEducation extends Model
{
    use SoftDeletes;

    protected $table = 'resume_education';

    protected $casts = [
        'resume_id' => 'integer',
        'institution_name' => 'string',
        'institution_location' => 'string',
        'major' => 'string',
        'minor' => 'string',
        'gpa' => 'string',
        'description' => 'string',
        'started_on' => 'date',
        'ended_on' => 'date',
    ];

    public function resume()
    {
        return $this->hasOne(Resume::class);
    }
}
