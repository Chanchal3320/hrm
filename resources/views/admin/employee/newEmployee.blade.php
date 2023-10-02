@extends('admin.master')

@section('title')
    Admin | New Employee
@endsection


@section('mainContents')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>New Employee</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">Employee</li>
                    <li class="breadcrumb-item active">New Employee</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-10">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">New Company Form</h5>

                            <!-- Horizontal Form -->
                            <form action="{{ route('addEmployee') }}" method="post">
                                @csrf

                                <div class="row mb-3">


                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Department Name</label>
                                        <select name="txt_dept" class="form-control" id="">
                                            <option value="">Please Select</option>

                                            @foreach($allDepts as $allDept)
                                                <option value="{{ $allDept->id }}">{{ $allDept->dept_name }}</option>
                                            @endforeach
                                        </select>


                                </div>



                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="txt_name" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Designation</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="txt_desig" class="form-control" id="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Date of Join</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="txt_doj" class="form-control" id="txt_doj">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Salary</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="txt_salary" class="form-control" id="">
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
