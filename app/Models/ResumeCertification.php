<?php

namespace App\Models;

use App\Models\Resume;
use Illuminate\Database\Eloquent\Model;

class ResumeCertification extends Model
{
    protected $casts = [
        'resume_id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'certificated_on' => 'date',
        'expires_on' => 'date',
    ];

    public function resume()
    {
        return $this->hasOne(Resume::class);
    }
}
