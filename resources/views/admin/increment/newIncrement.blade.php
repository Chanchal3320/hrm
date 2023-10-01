@extends('admin.master')

@section('title')
    Admin | New Increment
@endsection


@section('mainContents')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>New Increment</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>

                    <li class="breadcrumb-item active">New Increment</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-10">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Increment Form</h5>

                            <!-- Horizontal Form -->
                            <form action="{{ route('addInc') }}" method="post">
                                @csrf

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Employer Name</label>
                                    <div class="col-sm-10">
                                        <select name="txt_empName" id="" class="form-control">
                                            <option value="" readonly>Select First</option>
                                            @foreach($allEmployes as $allEmploye)

                                            <option value="{{$allEmploye->id }}">{{ $allEmploye->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Department</label>
                                    <div class="col-sm-10">
                                        <select name="txt_depName" id="" class="form-control">
                                            <option value="" readonly>Select First</option>
                                            @foreach($allDepts as $allDept)
                                                <option value="{{$allDept->id }}">{{ $allDept->dept_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                 <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Company Name</label>
                                    <div class="col-sm-10">
                                        <select name="txt_cmpName" id="" class="form-control">
                                            <option value="" readonly>Select First</option>
                                            @foreach($allCompanies as $allCompany)
                                                <option value="{{$allCompany->id }}">{{ $allCompany->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Percentage</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="txt_percent" class="form-control" id="inputPassword">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Date</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="txt_date" class="form-control" id="incDate">
                                        </div>
                                    </div>


                                </div>


                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- End Horizontal Form -->

                        </div>
                    </div>


                </div>


            </div>
        </section>

    </main><!-- End #main -->


@endsection
