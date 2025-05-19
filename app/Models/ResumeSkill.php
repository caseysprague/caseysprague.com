<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResumeSkill extends Model
{
    use SoftDeletes;

    public function resume()
    {
        return $this->hasOne(Resume::class);
    }
}
