<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherResource extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'file'];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_teacher_resource');
    }

    public function teachers()
    {
        return $this->belongsToMany(User::class, 'teacher_teacher_resource');
    }
}
