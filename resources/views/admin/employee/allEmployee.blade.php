@extends('admin.master')

@section('title')
    Admin | Employee
@endsection


@section('mainContents')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Employee Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Employee</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Employee Table</h5>

                            <form action="{{ route('searchResult') }}" method="post">
                                @csrf

                                <div class="row">
                                    <div class="col-4">
                                        <div class="input-group date" data-provide="datepicker">
                                            <input type="text" class="form-control" name="txt_start" placeholder="Start Date">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group date" data-provide="datepicker">
                                            <input type="text" class="form-control" name="txt_end" placeholder="End Date">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>


                            </form>

                            <br>

                            <!-- Default Table -->
                            <table id="employeeList" class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Date of Join</th>
                                    <th scope="col">Salary</th>

                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp


                                @foreach($allEmployes as $allEmployee)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $allEmployee->name }}</td>
                                    <td>{{ $allEmployee->dept_name }}</td>
                                    <td>{{ $allEmployee->designation }}</td>
                                    <td>{{ $allEmployee->doj }}</td>
                                    <td>{{ $allEmployee->salary	 }}</td>

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
