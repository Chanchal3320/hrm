<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index(){

        $allEmployes = DB::table('employees')
                ->join('departments','employees.department_id','=','departments.id')
                ->select('employees.*','departments.dept_name')
                ->where('employees.status',1)
                ->get();


        return view('admin.employee.allEmployee',[
            'allEmployes'=>$allEmployes
        ]);
    }


    public function create(){
        $allCompanis = Company::all();
        $allDepts = Department::all();
        return view('admin.employee.newEmployee',[
            'allCompanis'=>$allCompanis,
            'allDepts'=>$allDepts
        ]);
    }
}
