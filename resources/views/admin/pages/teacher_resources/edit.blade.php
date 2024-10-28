@extends('admin.admin-dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4>Edit Teacher Resource</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('teacher_resources.update', $teacherResource->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $teacherResource->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" required>{{ $teacherResource->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="file">Upload File</label>
                        <input type="file" name="file" class="form-control">
                        @if($teacherResource->file)
                            <p>Current File: <a href="{{ Storage::url($teacherResource->file) }}" target="_blank">View File</a></p>
                        @endif
                    </div>
                    
                 
                    <button type="submit" class="btn btn-primary">Update Resource</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
