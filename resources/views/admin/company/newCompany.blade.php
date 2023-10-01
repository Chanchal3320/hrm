@extends('admin.master')

@section('title')
    Admin | New Company
@endsection


@section('mainContents')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>New Company</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item">Company</li>
                    <li class="breadcrumb-item active">New Company</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">New Company Form</h5>

                            <!-- Horizontal Form -->
                            <form action="{{ route('addCompany') }}" method="post">
                                @csrf

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label"> Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="txt_name" id="inputText">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <textarea name="txt_address" class="form-control" id="" cols="30" rows="10"></textarea>
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
