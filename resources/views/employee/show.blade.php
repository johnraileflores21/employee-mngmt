@extends('layouts.app')

@section('content')

    <div class="container">
        <h3 align="center" class="">Employee Management</h3>
    </div>
    <div class="card mt-3">
              <div class="card-header">
                <h3 class="card-title">Employee Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">FirstName</th>
                    <th scope="col">MiddleName</th>
                    <th scope="col">LastName</th>
                    <th scope="col">Address</th>
                    <th scope="col">Country</th>
                    <th scope="col">Zip</th>
                    <th scope="col">Age</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">DateHired</th>
                    <th scope="col">Department</th>
                    <th scope="col">Division</th>
                    <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($employees as $employee)
                        <tr>
                            <td>{{ $employee->id }}</td>
                            <td>{{ $employee->firstname }}</td>
                            <td>{{ $employee->middlename }}</td>
                            <td>{{ $employee->lastname }}</td>
                            <td>{{ $employee->address }}</td>
                            <td>{{ $employee->country }}</td>
                            <td>{{ $employee->zip }}</td>
                            <td>{{ $employee->age }}</td>
                            <td>{{ $employee->birthdate }}</td>
                            <td>{{ $employee->date_hired }}</td>
                            <td>{{ $employee->department }}</td>
                            <td>{{ $employee->division }}</td>
                            <td>
                                <a href="{{ url('employees/' . $employee->id . '/edit') }}" class="btn btn-success btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr> 
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection


@push('css')
    <style>    
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#FFFF00;
        }
        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush