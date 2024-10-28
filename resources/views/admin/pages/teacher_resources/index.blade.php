@extends('admin.admin-dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4>Teacher Resources</h4>
            <a href="{{ route('teacher_resources.create') }}" class="btn btn-primary">Add New Resource</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>File</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resources as $resource)
                            <tr>
                                <td>{{ $resource->title }}</td>
                                <td>{{ $resource->description }}</td>
                                <td>
                                    @if ($resource->file)
                                        <a href="{{ Storage::url($resource->file) }}" target="_blank">View File</a>
                                    @else
                                        No File
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('teacher_resources.edit', $resource->id) }}" class="btn btn-outline-secondary btn-sm">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    <form action="{{ route('teacher_resources.destroy', $resource->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this resource?');">
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </button>
                                    </form>
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
