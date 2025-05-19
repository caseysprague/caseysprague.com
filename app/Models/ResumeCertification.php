<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResumeCertification extends Model
{
    use SoftDeletes;

    protected function casts(): array
    {
        return [
            'certificated_on' => 'date',
            'expires_on' => 'date',
        ];
    }

    public function resume()
    {
        return $this->hasOne(Resume::class);
    }
}
