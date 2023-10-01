<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){

        $allEmployes = DB::table('employees')
            ->join('departments','employees.department_id','=','departments.id')
            ->join('companies','companies.id','=','departments.company_id')
            ->select('employees.*','departments.dept_name','companies.name as cmpName')
            ->where('employees.status',1)
            ->get();


        return view('welcome',[
            'allEmployes'=>$allEmployes
        ]);
    }


    public function search(Request $request){

        $startDate =Carbon::parse($request->txt_start)->startOfDay();

        $endDate = Carbon::parse($request->txt_end)->endOfDay();

        $employees = DB::table('employees')
            ->join('departments','employees.department_id','=','departments.id')
            ->join('companies','companies.id','=','departments.company_id')
            ->select('employees.*','departments.dept_name','companies.name as cmpName')
            ->where('employees.status',1)
            ->where(function($query) use($startDate, $endDate){
                $query->where('doj', '>=', $startDate)
                    ->where('doj', '<=', $endDate);
            })->get();


        return view('admin.employee.search',[
            'employees'=>$employees
        ]);
    }


    public function searchIncrement(Request $request){

        $startDate =Carbon::parse($request->txt_start)->startOfDay();

        $endDate = Carbon::parse($request->txt_end)->endOfDay();

        $employees = DB::table('increaments')
            ->join('departments','increaments.department_id','=','departments.id')
            ->join('companies','companies.id','=','increaments.company_id')
            ->join('employees','employees.id','=','increaments.employee_id')
            ->select('increaments.*','departments.dept_name','companies.name as cmpName','employees.name as empName','employees.designation as empDesig')
            ->where('employees.status',1)

            ->where(function($query) use($startDate, $endDate){
                $query->where('inc_date', '>=', $startDate)
                    ->where('inc_date', '<=', $endDate);
            })->get();


        return view('admin.increment.searchResult',[
            'employees'=>$employees
        ]);
    }
}
