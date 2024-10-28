<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        // Logic to fetch admin-specific data
        return view('admin.index');
    }
    
    public function teacher()
    {
        // Retrieve all users with the role 'teacher'
        $teachers = User::where('role', 'teacher')->get();
        return view('admin.pages.user-list.teacher', compact('teachers'));
    }
    public function student()
    {
        // Retrieve all users with the role 'student'
        $students = User::where('role', 'student')->get();
        return view('admin.pages.user-list.student', compact('students'));
    }

    public function GradeOne()
    {
        $students = User::where('role', 'student')
        ->where('grade', 1) 
        ->get();
    
   
    return view('admin.pages.grade.grade-one', compact('students'));
    }
    public function GradeTwo()
    {
        $students = User::where('role', 'student')
        ->where('grade', 2) 
        ->get();
    
   
    return view('admin.pages.grade.grade-two', compact('students'));
    }
    public function GradeThree()
    {
        $students = User::where('role', 'student')
        ->where('grade', 3) 
        ->get();
    
   
    return view('admin.pages.grade.grade-three', compact('students'));
    }
    public function GradeFour()
    {
        $students = User::where('role', 'student')
        ->where('grade', 4) 
        ->get();
    
   
    return view('admin.pages.grade.grade-four', compact('students'));
    }
    public function GradeFive()
    {
        $students = User::where('role', 'student')
        ->where('grade', 5) 
        ->get();
    
   
    return view('admin.pages.grade.grade-five', compact('students'));
    }
    public function GradeSix()
    {
        $students = User::where('role', 'student')
        ->where('grade', 6) 
        ->get();
    
   
    return view('admin.pages.grade.grade-six', compact('students'));
    }
    public function GradeSeven()
    {
        $students = User::where('role', 'student')
        ->where('grade', 7) 
        ->get();
    
   
    return view('admin.pages.grade.grade-seven', compact('students'));
    }
    public function GradeEight()
    {
        $students = User::where('role', 'student')
        ->where('grade', 8) 
        ->get();
    
   
    return view('admin.pages.grade.grade-eight', compact('students'));
    }
    public function GradeNine()
    {
        $students = User::where('role', 'student')
        ->where('grade', 9) 
        ->get();
    
   
    return view('admin.pages.grade.grade-nine', compact('students'));
    }
    public function GradeTen()
    {
        $students = User::where('role', 'student')
        ->where('grade', 10) 
        ->get();
    
   
    return view('admin.pages.grade.grade-ten', compact('students'));
    }
   
}
