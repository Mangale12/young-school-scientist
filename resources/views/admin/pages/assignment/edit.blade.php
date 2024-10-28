@extends('admin.admin-dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4>Edit Assignment</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('assignments.update', $assignment->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label>Assignment Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $assignment->title }}" required>
                    </div>
                    <div class="mb-3">
                        <label>Assignment Details</label>
                        <textarea name="description" class="form-control"  id="elm1">{{ $assignment->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label>Upload New File (Optional)</label>
                        <input type="file" name="file" class="form-control">
                        @if ($assignment->file)
                            <a href="{{ Storage::url($assignment->file) }}" target="_blank">Current File</a>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Update Assignment</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
