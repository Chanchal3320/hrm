@extends('admin.master')

@section('title')
    Admin | Increment
@endsection


@section('mainContents')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Increment Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Increment</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">Increment Table</h5>

                            <a href="{{ route('newIncrementData') }}" class="btn btn-primary float-end" >
                                <i class="fa fa-plus"></i> ADD NEW
                            </a>

                            <form action="{{ route('searchResultIncrement') }}" method="post">
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

                            <!-- Default Table -->
                            <table id="incrementList" class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Employer Name</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Department Name</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Percentage</th>
                                    <th scope="col">Date</th>


                                </tr>
                                </thead>
                                <tbody>

                                @php
                                    $i = 1;
                                @endphp


                                @foreach($employees as $employee)
                                <tr>
                                    <td scope="row">{{ $i++ }}</td>
                                    <td scope="row">{{ $employee->empName }}</td>
                                    <td scope="row">{{ $employee->dept_name }}</td>
                                    <td scope="row">{{ $employee->cmpName }}</td>
                                    <td scope="row">{{ $employee->empDesig }}</td>
                                    <td scope="row">{{ $employee->percent }} %</td>
                                    <td scope="row">{{ \Carbon\Carbon::parse( $employee->inc_date)->format('d M Y') }}</td>


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
