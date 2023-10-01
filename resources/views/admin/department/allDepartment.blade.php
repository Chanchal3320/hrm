@extends('admin.master')

@section('title')
    Admin | Department
@endsection


@section('mainContents')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Department Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Department</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Department Table</h5>

                            <a href="{{ route('newDepartment') }}" class="btn btn-primary float-end" >
                                <i class="fa fa-plus"></i> ADD NEW
                            </a>

                            <!-- Default Table -->
                            <table id="companyList" class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Department Name</th>
                                    <th scope="col">Comapny</th>

                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp

                                @foreach($allDepts as $allDept)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $allDept->dept_name }}</td>
                                    <td>{{ $allDept->company->name }}</td>

                                    <td></td>
                                </tr>
                                @endforeach


                                </tbody>
                            </table>
                            <!-- End Default Table Example -->
                        </div>
                    </div>



                </div>


            </div>
        </section>

    </main><!-- End #main -->

@endsection
