@extends('admin.admin-dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4>Add New Group</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('groups.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title">Group Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Group Title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description">Group Description</label>
                        <textarea name="description" class="form-control" placeholder="Group Description" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Group</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
