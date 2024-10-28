<?php
namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    use HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
   // User.php
   protected $fillable = [
    'name', 'email', 'password', 'role', 'student_id', 'school_name', 'grade', 'section', 
    'date_of_birth', 'address', 'parents_phone_number', 'parents_email', 'teacher_id', 
    'subject_expert', 'phone_number'
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    // app/Models/User.php

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_user');
    }
    public function teacherCourses()
    {
        return $this->belongsToMany(Course::class, 'course_teacher');
    }
    public function studentCourses(){
        return $this->belongsToMany(Course::class,'course_student');
    }
    
    public function teacherResources()
    {
        return $this->belongsToMany(TeacherResource::class, 'teacher_teacher_resource');
    }
  
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
