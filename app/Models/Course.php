<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [
        'id',
    ];


    public function lesson()
    {
        return $this->belongsToMany(Lesson::class);
    }
}
