<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResumeJob extends Model
{
    use SoftDeletes;

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

    public function company()
    {
        return $this->belongsTo(ResumeCompany::class);
    }
}
