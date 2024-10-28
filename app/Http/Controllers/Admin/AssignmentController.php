<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AssignmentController extends Controller
{
    // Show all assignments
    public function index()
    {
        $assignments = Assignment::all();
        return view('admin.pages.assignment.index', compact('assignments'));
    }

    // Show the form for creating a new assignment
    public function create()
    {
        return view('admin.pages.assignment.create');
    }

    // Store a new assignment
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'nullable|file'
        ]);

        $filePath = null;
        if ($request->hasFile('file')) {
         
            $filePath = $request->file('file')->store('assignments', 'public');

        }

        Assignment::create([
            'title' => $request->title,
            'description' => $request->description,
            'file' => $filePath,
        ]);

        return redirect()->route('assignments.index');
    }

    // Show the form for editing the specified assignment
    public function edit(Assignment $assignment)
    {
        return view('admin.pages.assignment.edit', compact('assignment'));
    }

    // Update the specified assignment
    public function update(Request $request, Assignment $assignment)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'nullable|file'
        ]);

        $filePath = $assignment->file;
        if ($request->hasFile('file')) {
            if ($filePath) {
                Storage::delete($filePath);
            }
            $filePath = $request->file('file')->store('assignments');
        }

        $assignment->update([
            'title' => $request->title,
            'description' => $request->description,
            'file' => $filePath,
        ]);

        return redirect()->route('assignments.index');
    }

    // Delete the specified assignment
    public function destroy(Assignment $assignment)
    {
        if ($assignment->file) {
            Storage::delete($assignment->file);
        }
        $assignment->delete();
        return redirect()->route('assignments.index');
    }
}
