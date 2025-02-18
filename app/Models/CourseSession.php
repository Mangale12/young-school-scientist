<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSession extends Model
{
    use HasFactory;
    
    protected $fillable = ['course_id', 'session', 'description'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
