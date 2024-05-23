<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class employeeController extends Controller
{
    public function index()
    {
        return view('employee.index');
    }
    public function store(Request $request)
    {
        // $this->employee->create($request->all());
        // return redirect()->back();
        //or you can use this

        //$this->validationInput($request);
        //$keys = ['lastname','firstname','middlename','address','country','zip','age','birthdate','date_hired','department','division'];
        //$input = $this->createQueryInput($keys, $request);

        //return redirect()->intended('/employee');
        $employeeData = [
            'lastname' => $request->input('lastname'),
            'firstname'=> $request->input('firstname'),
            'middlename'=> $request->input('middlename'),
            'address' => $request->input('address'),
            'country'=> $request->input('country'),
            'zip'=> $request->input('zip'),
            'age'=> $request->input('age'),
            'birthdate'=> $request->input('birthdate'),
            'date_hired'=> $request->input('date_hired'),
            'department'=> $request->input('department'),
            'division'=> $request->input('division')
        ];
        Employee::create($employeeData);

        return redirect('/employee');
    }
    public function show()
    {
        $employees = Employee::all();
        return view('employee.show', compact('employees'));
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, int $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());

        return redirect()->route('employee.index')->with('success', 'Employee updated successfully');
    }
}
