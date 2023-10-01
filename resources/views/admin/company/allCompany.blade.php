@extends('admin.master')

@section('title')
    Admin | Company
@endsection


@section('mainContents')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Company Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">Company Tables</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">

                            <a href="{{ route('newCompany') }}" class="btn btn-primary float-end" data-toggle="modal" data-target="#newCompany">
                                 <i class="fa fa-plus"></i> ADD NEW
                            </a>

                            <h5 class="card-title">Company Table</h5>



                            <!-- Default Table -->
                            <table id="companyList" class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>

                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                @php
                                $i = 1;
                                @endphp

                                @foreach($allCompanies as $allCompany)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $allCompany->name }}</td>
                                    <td>{{ $allCompany->address }}</td>
                                    <td> </td>
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
