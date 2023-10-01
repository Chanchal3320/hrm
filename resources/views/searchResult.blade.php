<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Assesment</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('frontEnd/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('frontEnd/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css" integrity="sha512-34s5cpvaNG3BknEWSuOncX28vz97bRI59UnVtEEpFX536A7BtZSJHsDyFoCl8S7Dt2TPzcrCEoHBGeM4SUBDBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- Template Main CSS File -->
    <link href="{{asset('frontEnd/assets/css/style.css')}}" rel="stylesheet">


</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{ route('/') }}">Arsha</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                {{--                <li><a class="nav-link scrollto" href="#about">Employee</a></li>--}}

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section  class="d-flex align-items-center mt-40">

    <div class="container">
        <div class="row">
            <div class="col-12">

                <h3>Employer Information</h3>


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

                <br><br>


                <!-- Default Table -->
                <table id="employeeList" class="table table-striped" style="width:100%">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Company</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Date of Join</th>
                        <th scope="col">Salary</th>

                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i = 1;
                    @endphp


                    @foreach($employees as $employee)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->dept_name }}</td>
                            <td>{{ $employee->cmpName }}</td>
                            <td>{{ $employee->designation }}</td>
                            <td>{{ \Carbon\Carbon::parse($employee->doj)->format('d-m-Y')  }}</td>
                            <td>{{ $employee->salary	 }}</td>

                        </tr>
                    @endforeach


                    </tbody>
                </table>
                <!-- End Default Table Example -->




            </div>
        </div>
    </div>


</section><!-- End Hero -->



<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('frontEnd/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('frontEnd/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontEnd/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('frontEnd/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontEnd/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('frontEnd/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('frontEnd/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('frontEnd/assets/js/main.js')}}"></script>


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script !src="">
    new DataTable('#employeeList');
</script>


<script>
    $('.datepicker').datepicker();
</script>

</body>

</html>
