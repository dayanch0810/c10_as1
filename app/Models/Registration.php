<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    /** @use HasFactory<\Database\Factories\RegistrationFactory> */
    use HasFactory;

    protected $guarded = [
        'id',
    ];


    public function lesson()
    {
        return $this->belongsToMany(Lesson::class);
    }


    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
