<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TeacherController extends Controller
{
    public function index()
    {
        // Logic to fetch teacher-specific data
        $data['user'] = User::where('id', auth()->user()->id)->first();
        $data['rows'] = $data['user']->teacherCourses;
        return view('teacher.index', compact('data'));
    }
    public function courses($id)
    {
        // Logic to fetch teacher-specific data
        $data['user'] = User::where('id', auth()->user()->id)->first();
        $data['rows'] = $data['user']->teacherCourses->where('id', $id)->firstOrFail();
        return view('teacher.courses', compact('data'));
    }

    
}
