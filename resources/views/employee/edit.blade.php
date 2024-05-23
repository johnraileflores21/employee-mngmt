@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-secondary">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="col-md-8 m-auto">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Employee</h3>
        </div>
    <!-- /.card-body -->
    <form method="POST" action="{{ route('employee.update', $employee->id) }}">
             {!! csrf_field() !!}
             @method("PATCH")
              <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="" value="{{ $employee->lastname }}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="" value="{{ $employee->firstname }}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Middle Name</label>
                    <input type="text" class="form-control" id="middlename" name="middlename" placeholder="" value="{{ $employee->middlename }}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="" value="{{ $employee->address }}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Country</label>
                    <input type="text" class="form-control" id="country" name="country" placeholder="Please Select your Country" value="{{ $employee->address }}" required>
                  </div>
                  <!--<div class="form-group">
                    <label for="exampleInputPassword1">State</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Please Select your state">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">City</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Please Select City">
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Zip</label>
                    <input type="number" class="form-control" id="zip" name="zip" placeholder="" value="{{ $employee->zip }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Age</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="" value="{{ $employee->age }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Birthday</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="" value="{{ $employee->birthdate }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Hired Date</label>
                    <input type="date" class="form-control" id="date_hired" name="date_hired" placeholder="" value="{{ $employee->date_hired }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Department</label>
                    <input type="text" class="form-control" id="department" name="department" placeholder="" value="{{ $employee->department }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Division</label>
                    <input type="text" class="form-control" id="division" name="division" placeholder="" value="{{ $employee->division }}">
                  </div>
                  
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
  </div>
  </div>
    <!-- /.content -->
@endsection