<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'class', 'description', 'video_url'];


    public function sessions()
    {
        return $this->hasMany(CourseSession::class);
    }
    public function students()
    {
        return $this->belongsToMany(User::class, 'course_student');
    }

    public function teachers()
    {
        return $this->belongsToMany(User::class, 'course_teacher'); // Define the pivot table for teacher assignments
    }

    public function teacherResources()
    {
        return $this->belongsToMany(TeacherResource::class, 'course_teacher_resource');
    }
 
}
