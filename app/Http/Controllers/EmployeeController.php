<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Department;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\HttpKernel\Log\format;

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


    public function store(Request $request){

        $newEmployee = new Employee();
        $newEmployee ->department_id = $request->txt_dept;
        $newEmployee ->name = $request->txt_name;
        $newEmployee ->designation = $request->txt_desig;
        $newEmployee ->doj =Carbon::parse($request->txt_doj)->format('Y-m-d') ;
        $newEmployee ->salary = $request->txt_salary;
        $newEmployee ->save();

        return redirect(route('employee'));
    }




}
