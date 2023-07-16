@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Employee <strong> Monthly Salary </strong></h4>
                        {{-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                {{-- <form method="POST" action="{{ route('store.salary.increment', $employee->id) }}"> --}}
                                <form method="GET" action="{{ route('monthly.salary.search') }}">
                                    @csrf
                                    <div class="row">


                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <h5>Month <span class="text-danger"></span></h5>
                                                <div class="controls">
                                                    <input type="month" name="month" id="month" class="form-control"
                                                        value={{ date('Y-m') }} aria-invalid="false">
                                                    @error('date')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3" style="padding-top: 25px;">

                                            <a id="search" class="btn btn-primary" name="search"> Search</a>

                                        </div>

                                    </div>
                                    {{-- <a href="javascript:" id="load_slip">click</a> --}}
                                    <div class="row">
                                        <div id="MonthlySalaryDetails" class="col-md-12 d-none">
                                            <table class="table table-bordered table-striped" style="width: 100%">
                                                <thead>
                                                    <tr>
                                                        {{-- <th>SL</th> --}}
                                                        <th>ID No</th>
                                                        <th>Employee Name </th>

                                                        <th>Salary PDF</th>
                                                    </tr>
                                                </thead>


                                                <tbody id="salary-generate-tr">
                                                     
                                                </tbody>

                                            </table>



                                        </div>

                                    </div>
                                    {{-- <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-info " value="Submit">
                                    </div> --}}
                                </form>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </section>
        </div>


    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#search').on('click', function() {
                var month = $('#month').val();
                //console.log(month);
                $.ajax({
                    url: "{{ route('monthly.salary.search') }}",
                    type: "GET",
                    data: {
                        'month': month
                    },
                    success: function(data) {
                        // console.log(data);
                        $('#MonthlySalaryDetails').removeClass('d-none');
                        var  html = $('#salary-generate-tr').html(data.html);
                    }
                });
            });
            document.addEventListener("DOMContentLoaded", function() {
                const para = document.getElementById('#load_slip');
                para.addEventListener('click', loadme);

                function loadme() {
                    alert("hello");
                }
            });

        });
    </script> 
@endsection
