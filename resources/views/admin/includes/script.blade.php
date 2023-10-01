<!-- Vendor JS Files -->
<script src="{{asset('backEnd/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('backEnd/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backEnd/assets/vendor/chart.js/chart.umd.js')}}"></script>
<script src="{{asset('backEnd/assets/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{asset('backEnd/assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{asset('backEnd/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('backEnd/assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('backEnd/assets/vendor/php-email-form/validate.js')}}"></script>


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js" integrity="sha512-LsnSViqQyaXpD4mBBdRYeP6sRwJiJveh2ZIbW41EBrNmKxgr/LFZIiWT6yr+nycvhvauz8c2nYMhrP80YhG7Cw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<!-- Template Main JS File -->
<script src="{{asset('backEnd/assets/js/main.js')}}"></script>


<script !src="">

    new DataTable('#companyList');
    new DataTable('#departmentList');
    new DataTable('#employeeList');
    new DataTable('#incrementList');

</script>


<script>
    $('#incDate').datepicker();
</script>
