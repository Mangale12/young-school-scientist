@extends('admin.admin-dashboard')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Grade Three Students</h4>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Student ID</th>
                            <th>School Name</th>
                            <th>Grade</th>
                            <th>Section</th>
                            <th>Date of Birth</th>
                            <th>Address</th>
                            <th>Parents Phone Number</th>
                            <th>Parents Email</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->student_id }}</td>
                                <td>{{ $student->school_name }}</td>
                                <td>{{ $student->grade }}</td>
                                <td>{{ $student->section }}</td>
                                <td>{{ $student->date_of_birth }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->parents_phone_number }}</td>
                                <td>{{ $student->parents_email }}</td>
                            
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>
@endsection
