@extends('admin.admin-dashboard')

@section('content')
    <h2>Assign Course: {{ $course->name }}</h2>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('courses.assign', $course->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <h5>Select Students:</h5>
            <div class="row">
                @foreach ($students as $student)
                    <div class="col-md-4">
                        <div class="form-check">
                            <input 
                                class="form-check-input" 
                                type="checkbox" 
                                name="student_ids[]" 
                                value="{{ $student->id }}" 
                                id="student_{{ $student->id }}"
                                @if (in_array($student->id, $assignedStudentIds)) checked @endif
                            >
                            <label class="form-check-label" for="student_{{ $student->id }}">
                                {{ $student->name }} (Grade: {{ $student->grade }} - Student ID: {{ $student->student_id }})
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="form-group">
            <h5>Select Teachers:</h5>
            <div class="row">
                @foreach ($teachers as $teacher)
                    <div class="col-md-4">
                        <div class="form-check">
                            <input 
                                class="form-check-input" 
                                type="checkbox" 
                                name="teacher_ids[]" 
                                value="{{ $teacher->id }}" 
                                id="teacher_{{ $teacher->id }}"
                                @if (in_array($teacher->id, $assignedTeacherIds)) checked @endif
                            >
                            <label class="form-check-label" for="teacher_{{ $teacher->id }}">
                                {{ $teacher->name }} (Subject: {{ $teacher->subject_expert }} - Teacher ID: {{ $teacher->teacher_id }})
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="form-group">
            <h5>Select Teacher Resources:</h5>
            <div class="row">
                @foreach ($resources as $resource)
                    <div class="col-md-4">
                        <div class="form-check">
                            <input 
                                class="form-check-input" 
                                type="checkbox" 
                                name="resource[]" 
                                value="{{ $resource->id }}" 
                                id="resource_{{ $resource->id }}"
                                @if (in_array($resource->id, $courseResources)) checked @endif
                            >
                            <label class="form-check-label" for="teacher_{{ $resource->id }}">
                                {{ $resource->title }} 
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Assign Course</button>
    </form>
@endsection
