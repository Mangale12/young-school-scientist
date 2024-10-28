<!-- resources/views/courses/edit-assignments.blade.php -->


@extends('admin.admin-dashboard')
@section('content')
    <h2>Edit Assignments for Course: {{ $course->name }}</h2>

    <form action="{{ route('courses.assign', $course->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="students">Select Students:</label>
            <select name="student_ids[]" id="students" multiple class="form-control">
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" 
                            {{ in_array($student->id, $assignedStudentIds) ? 'selected' : '' }}>
                        {{ $student->name }} (Grade: {{ $student->grade }})
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update Assignments</button>
    </form>
@endsection
