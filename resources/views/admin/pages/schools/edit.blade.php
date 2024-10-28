@extends('admin.admin-dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 >Edit School</h4>

         

        </div>
    </div>
</div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                

                    <form action="{{ route('schools.update', $school->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>School Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $school->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label>School Details</label>
                            <textarea name="description" id="elm1" class="form-control" required>{{ $school->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update School</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
