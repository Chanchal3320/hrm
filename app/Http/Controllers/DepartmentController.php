<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //Admin Panel Company List
    public function index(){

        $allDepts = Department::all();

        return view('admin.department.allDepartment',[
            'allDepts'=>$allDepts
        ]);
    }


    public function create(){
        $allCompanis = Company::all();
        return view('admin.department.newDepartment',[
            'allCompanis'=>$allCompanis
        ]);
    }


    public function store(Request $request){
        $newDept = new Department();
        $newDept ->company_id = $request->txt_cmp;
        $newDept ->dept_name = $request->txt_name;
        $newDept ->save();


        return redirect(route('department'));

    }
}
