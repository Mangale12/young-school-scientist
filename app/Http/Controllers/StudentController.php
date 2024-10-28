<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseSession;
use App\Models\User;
class StudentController extends Controller
{
    public function index()
    {
        $data['user'] = User::where('id', auth()->user()->id)->first();
        $data['rows'] = $data['user']->studentCourses;
        return view('student.index', compact('data'));
    }
   
    public function show($id)
    {
        $course = Course::with('sessions')->findOrFail($id);
        return view('student.courses', compact('course'));
    }

}
