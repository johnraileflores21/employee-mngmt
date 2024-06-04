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
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">Add New Employee</h3>
            <a href="{{ url('employee/show') }}" class="btn btn-success ml-auto">Show Table</a>
        </div>
    <!-- /.card-body -->
    <form action="{{ url('employee')}}" method="POST">
              @csrf
              <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Lastname" value="{{ old('lastname') }}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter Firstname" value="{{ old('firstname') }}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Middle Name</label>
                    <input type="text" class="form-control" id="middlename" name="middlename" placeholder="Enter Middlename" value="{{ old('middlename') }}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" value="{{ old('address') }}" required>
                  </div>
                  <div class="form-group">
                      <label for="country">Country</label>
                      <select class="form-control" id="country" name="country" required>
                          <option value="" disabled selected>Please Select your Country</option>
                          <option value="Philippines" {{ old('country') == 'Philippines' ? 'selected' : '' }}>Philippines</option>
                          <option value="Japan" {{ old('country') == 'Japan' ? 'selected' : '' }}>Japan</option>
                          <option value="USA" {{ old('country') == 'USA' ? 'selected' : '' }}>USA</option>
                      </select>
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
                    <input type="number" class="form-control" id="zip" name="zip" placeholder="Enter Zip Code" value="{{ old('zip') }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Age</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age" value="{{ old('age') }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Birthday</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="" value="{{ old('birthdate') }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Hired Date</label>
                    <input type="date" class="form-control" id="date_hired" name="date_hired" placeholder="" value="{{ old('date_hired') }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Department</label>
                    <input type="text" class="form-control" id="department" name="department" placeholder="Enter Department" value="{{ old('department') }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Division</label>
                    <input type="text" class="form-control" id="division" name="division" placeholder="Enter Division" value="{{ old('division') }}">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-danger">Submit</button>
                </div>
              </form>
  </div>
  </div>
    <!-- /.content -->
@endsection