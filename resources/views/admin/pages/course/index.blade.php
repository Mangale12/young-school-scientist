@extends('admin.admin-dashboard')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Courses Lists</h4>

            <div class="page-title-right">
                <a href="{{ route('courses.create') }}" class="btn btn-primary">Add New Course</a>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Class</th>
                            <th>Actions</th>
                            <th>Content</th>
                            <th>Video</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->class }}</td>
                                <td style="width: 100px">
                                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-outline-secondary btn-sm">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                    <!-- Add Assign Button -->
                                    <a href="{{ route('courses.assign', $course->id) }}" class="btn btn-outline-primary btn-sm">
                                        Assign
                                    </a>
                                </td>
                                <td>{!! $course->description !!}</td>
                                <td>
                                    @if ($course->video_url)
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" 
                                                src="https://www.youtube.com/embed/{{ \Str::after($course->video_url, 'v=') }}" 
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                    @else
                                        No video
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
