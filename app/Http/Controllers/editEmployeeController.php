<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class editEmployeeController extends Controller
{
    public function edit()
    {
        return view('employ.edit');
    }
}
