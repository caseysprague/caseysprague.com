<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResumeEducation extends Model
{
    use SoftDeletes;

    protected $table = 'resume_education';

    protected function casts(): array
    {
        return [
            'started_on' => 'date',
            'ended_on' => 'date',
        ];
    }

    public function resume()
    {
        return $this->hasOne(Resume::class);
    }
}
