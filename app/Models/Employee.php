<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee_tbl';
    protected $primaryKey = 'id';
    protected $fillable = [
        'lastname',	
        'firstname',
        'middlename',
        'address',
        'country',
        'zip',
        'age',	
        'birthdate',
        'date_hired',
        'department',
        'division'
    ];
    use HasFactory;

}
