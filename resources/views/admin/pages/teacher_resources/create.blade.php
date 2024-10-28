

@extends('admin.admin-dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4>Add Teacher Resource</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('teacher_resources.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Resource Title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" placeholder="Resource Description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="file">Upload File</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Create Resource</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


{{-- @extends('admin.admin-dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4>Add Teacher Resources</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title"> Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Group Title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description"> Description</label>
                        <textarea name="description" class="form-control" placeholder="Group Description" required></textarea>
                    </div>
                    <div>
                        <form  class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted ri-upload-cloud-2-line"></i>
                                </div>
                                
                                <h4>Drop files here or click to upload.</h4>
                            </div>
                        </form>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Group</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection --}}
