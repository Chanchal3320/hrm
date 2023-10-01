<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //Admin Panel Company List
    public function index(){
        $allCompanies = Company::all();
        return view('admin.company.allCompany',[
            'allCompanies'=>$allCompanies
        ]);
    }


    public function create(){
        return view('admin.company.newCompany');
    }


    public function store(Request $request){

        $newCompany = new Company();
        $newCompany ->name = $request->txt_name;
        $newCompany ->address = $request->txt_address;
        $newCompany->save();

        return redirect(route('company'));

    }

}
