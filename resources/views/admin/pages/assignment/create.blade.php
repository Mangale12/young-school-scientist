@extends('admin.admin-dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4>Add New Assignment</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('assignments.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>Assignment Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Assignment Title" required>
                    </div>
                    <div class="mb-3">
                        <label>Assignment Details</label>
                        <textarea name="description"  class="form-control" placeholder="Assignment Details"  id="elm1" ></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Upload File</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Create Assignment</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
