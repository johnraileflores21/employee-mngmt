<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class employeesController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employ.index', compact('employees'));   
    }
    public function edit(int $id)
    {
        $employee = Employee::findOrFail($id);
        return view('employ.edit', compact('employees'));
    }
    
}
