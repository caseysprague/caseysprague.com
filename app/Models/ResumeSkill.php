<?php

namespace App\Models;

use App\Models\Resume;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResumeSkill extends Model
{
    use SoftDeletes;

    protected $casts = [
        'resume_id' => 'integer',
        'name' => 'string',
    ];

    public function resume()
    {
        return $this->hasOne(Resume::class);
    }
}
