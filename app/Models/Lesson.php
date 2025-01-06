<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    /** @use HasFactory<\Database\Factories\LessonFactory> */
    use HasFactory;


    protected $guarded = [
        'id',
    ];


    public function season()
    {
        return $this->belongsTo(Season::class);
    }


    public function location()
    {
        return $this->belongsTo(Location::class);
    }


    public function course()
    {
        return $this->belongsTo(Course::class);
    }


    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
