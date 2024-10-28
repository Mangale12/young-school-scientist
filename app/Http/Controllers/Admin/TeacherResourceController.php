<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeacherResource;

class TeacherResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resources = TeacherResource::all();
        return view('admin.pages.teacher_resources.index', compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.teacher_resources.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'nullable|file',
        ]);

        // Store the file if present
        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
    
            // Define the destination path
            $destinationPath = 'uploads/teacher_resources';
    
            // Generate a unique file name
            $fileName = time() . '_' . $file->getClientOriginalName();
    
            // Move the uploaded file to the destination path
            $file->move($destinationPath, $fileName);
    
            // Store the full path in the database
            $filePath = 'uploads/teacher_resources/' . $fileName;
        }

        // Create a new Teacher Resource
        TeacherResource::create([
            'title' => $request->title,
            'description' => $request->description,
            'file' => $filePath,
        ]);

        return redirect()->route('teacher_resources.index')->with('success', 'Teacher Resource created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeacherResource $teacherResource)
    {
        return view('admin.pages.teacher_resources.edit', compact('teacherResource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeacherResource $teacherResource)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'file' => 'nullable|file',
        ]);

        // Update the file if present
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('teacher_resources', 'public');
            $teacherResource->update([
                'file' => $filePath,
            ]);
        }

        // Update the resource
        $teacherResource->update($request->only('title', 'description'));

        return redirect()->route('teacher_resources.index')->with('success', 'Teacher Resource updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeacherResource $teacherResource)
    {
        // Delete the resource
        $teacherResource->delete();

        return redirect()->route('teacher_resources.index')->with('success', 'Teacher Resource deleted successfully.');
    }
}
