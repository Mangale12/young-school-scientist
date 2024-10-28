@extends('admin.admin-dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 >Add New School</h4>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                   
                    <form action="{{ route('schools.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>School Name</label>
                            <input type="text" name="name" class="form-control" placeholder="School Name" required>
                        </div>
                        <div class="mb-3">
                            <label>School Details</label>
                            <textarea name="description" id="elm1" class="form-control" placeholder="School Details" ></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create School</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

