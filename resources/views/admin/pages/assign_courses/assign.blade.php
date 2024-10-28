<!-- resources/views/courses/assign.blade.php -->

@extends('admin.admin-dashboard')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4>Assign Course: {{ $course->name }}</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="{{ route('courses.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('courses.assign', $course->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="students">Select Students:</label>
                                    <select name="student_ids[]" id="students" multiple class="form-control">
                                        @foreach ($students as $student)
                                            <option value="{{ $student->id }}">{{ $student->name }} (Grade: {{ $student->grade }})</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Assign Course</button>
                            </form>
                        </div>
                    </div>
                </div>


             
            </div>
        </form>
    </div>
</div>


   
@endsection
