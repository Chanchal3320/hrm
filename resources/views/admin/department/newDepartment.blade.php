@extends('admin.master')

@section('title')
    Admin | New Department
@endsection


@section('mainContents')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>New Department</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">Department</li>
                    <li class="breadcrumb-item active">New Department</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">New Department Form</h5>

                            <!-- Horizontal Form -->
                            <form action="{{ route('addDepartment') }}" method="post">
                                @csrf

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Company Name</label>
                                    <div class="col-sm-10">

                                        <select name="txt_cmp" class="form-control" id="">
                                            <option value=""></option>

                                            @foreach($allCompanis as $allCompany)
                                                <option value="{{ $allCompany->id }}">{{ $allCompany->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Dept Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="txt_name" class="form-control" id="">
                                    </div>
                                </div>

                                <div class="text-center">
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
