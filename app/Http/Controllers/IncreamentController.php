<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Increament;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IncreamentController extends Controller
{
    //

    public function index(){


        $employees = DB::table('increaments')
            ->join('departments','increaments.department_id','=','departments.id')
            ->join('companies','companies.id','=','increaments.company_id')
            ->join('employees','employees.id','=','increaments.employee_id')
            ->select('increaments.*','departments.dept_name','companies.name as cmpName','employees.name as empName','employees.designation as empDesig')
            ->where('employees.status',1)
            ->get();


        return view('admin.increment.allIncrement',[
           'employees'=>$employees
        ]);
    }


    public function create(){
        $allEmployes = Employee::all();
        $allCompanies = Company::all();
        $allDepts = Department::all();

        return view('admin.increment.newIncrement',[
            'allEmployes'=>$allEmployes,
            'allCompanies'=>$allCompanies,
            'allDepts'=>$allDepts,
        ]);

    }


    public function store(Request $request){

        $newInc = new Increament();
        $newInc ->company_id = $request->txt_cmpName;
        $newInc ->employee_id  = $request->txt_empName;
        $newInc ->department_id  = $request->txt_depName;
        $newInc ->percent = $request->txt_percent;
        $newInc ->inc_date =Carbon::parse($request->txt_date)->format('Y-m-d') ;
        $newInc ->save();

        return redirect(route('increment'));

    }
}
