<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseSession;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TeacherResource;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('sessions')->get();
        return view('admin.pages.course.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.pages.course.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'video_url' => 'required|url',
            'class' => 'required|integer|min:1|max:10', // Validation for class field
            'session.*' => 'required|string|max:255',
            'sessiondesc.*' => 'required|string',
        ]);
    
        $course = Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'video_url' => $request->video_url,
            'class' => $request->class, // Storing the class field
        ]);
    
        foreach ($request->session as $key => $sessionTitle) {
            CourseSession::create([
                'course_id' => $course->id,
                'session' => $sessionTitle,
                'description' => $request->sessiondesc[$key],
            ]);
        }
    
        return redirect()->route('courses.index')->with('success', 'Course created successfully');
    }
    

    public function edit($id)
    {
        $course = Course::with('sessions')->findOrFail($id);
        return view('admin.pages.course.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'video_url' => 'required|url',
            'class' => 'required|integer|min:1|max:10', // Validation for class field
            'session.*' => 'required|string|max:255',
            'sessiondesc.*' => 'required|string',
        ]);
    
        $course = Course::findOrFail($id);
        $course->update([
            'name' => $request->name,
            'description' => $request->description,
            'video_url' => $request->video_url,
            'class' => $request->class, // Updating the class field
        ]);
    
        // Remove old sessions and insert new ones
        CourseSession::where('course_id', $id)->delete();
    
        foreach ($request->session as $key => $sessionTitle) {
            CourseSession::create([
                'course_id' => $course->id,
                'session' => $sessionTitle,
                'description' => $request->sessiondesc[$key],
            ]);
        }
    
        return redirect()->route('courses.index')->with('success', 'Course updated successfully');
    }
    

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('course.index')->with('success', 'Course deleted successfully');
    }

    public function showAssignForm(Course $course)
    {
        $students = User::where('role', 'student')
            ->where('grade', $course->class)
            ->get();
    
        $teachers = User::where('role', 'teacher')->get(); // Fetch teachers
        $resources = TeacherResource::all();
        // Get the IDs of students and teachers already assigned to this course
        $assignedStudentIds = $course->students->pluck('id')->toArray();
        $assignedTeacherIds = $course->teachers->pluck('id')->toArray(); // Assuming you have a teachers relation
        $courseResources = $course->teacherResources->pluck('id')->toArray();
        // Pass the data to the view
        return view('admin.pages.course.assign', compact('course', 'students', 'teachers', 'assignedStudentIds', 'assignedTeacherIds', 'resources', 'courseResources'));
    }
    
    // Assign the course to selected students and teachers
    public function assignCourse(Request $request, Course $course)
    {
        // Validate that student_ids, teacher_ids, and resources are arrays if provided
        $request->validate([
            'student_ids' => 'nullable|array',
            'teacher_ids' => 'nullable|array',
            'resource' => 'nullable|array',
        ]);

        // Sync students: if student_ids are provided, sync them; otherwise, detach all students
        if ($request->has('student_ids') && !empty($request->student_ids)) {
            $course->students()->sync($request->student_ids);
        } else {
            $course->students()->detach();
        }

        // Sync teachers and their resources
        if ($request->has('teacher_ids') && !empty($request->teacher_ids)) {
            // Sync teachers to the course
            $course->teachers()->sync($request->teacher_ids); 

            // Iterate over each teacher to sync resources
            foreach ($request->teacher_ids as $teacher_id) {
                $teacher = User::find($teacher_id);

                // Ensure teacher exists before attempting to sync resources
                if ($teacher) {
                    if ($request->has('resource') && !empty($request->resource)) {
                        // Sync resources to the teacher
                        $teacher->teacherResources()->sync($request->resource);
                    } else {
                        // Detach all resources from the teacher if none are checked
                        $teacher->teacherResources()->detach();
                    }
                }
            }
        } else {
            // Detach all teachers from the course if no teacher_ids are provided
            $course->teachers()->detach();
        }

        // Sync resources to the course if provided, otherwise detach all
        if ($request->has('resource') && !empty($request->resource)) {
            $course->teacherResources()->sync($request->resource);
        } else {
            $course->teacherResources()->detach();
        }

        return back()->with('success', 'Students, Teachers, and Resources assigned to the course successfully!');
    }

    // public function assignCourse(Request $request, Course $course)
    // {
    //     // Validate that student_ids and teacher_ids are provided
    //     $request->validate([
    //         'student_ids' => 'nullable|array',
    //         'teacher_ids' => 'nullable|array',
    //     ]);
    
    //     // Attach selected students and teachers to the course
    //     if ($request->has('student_ids')) {
    //         $course->students()->sync($request->student_ids);
    //     }
    
    //     if ($request->has('teacher_ids')) {
    //         // Sync teachers to the course
    //         $course->teachers()->sync($request->teacher_ids); 
        
    //         // Iterate over each teacher to sync resources
    //         foreach ($request->teacher_ids as $teacher_id) {
    //             $teacher = User::find($teacher_id);
        
    //             // Ensure teacher exists before attempting to sync resources
    //             if ($teacher && $request->has('resource')) {
    //                 $teacher->teacherResources()->sync($request->resource);
    //             }
    //         }

    //     }
    //     // Sync resources to the course as well if provided
    //     if ($request->has('resource')) {
    //         $course->teacherResources()->sync($request->resource); 
    //     }
    //     return back()->with('success', 'Students and Teachers assigned to the course successfully!');
    // }
    




}
