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
                            <table class="table table-bordered table-striped" style="width: 100%">
                                <thead>
                                    <tr>
                                        {{-- <th>SL</th> --}}
                                        <th>ID No</th>
                                        <th>Employee Name </th>

                                        <th>Salary PDF</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    {{-- @dd($collections) --}}
                                    @forelse($collections as $key=>$item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ date('M-Y',strtotime($item->month_year)) }}</td>
                                            <td><a class="btn btn-sm btn-success" title="PaySlip"
                                                    target="_blank" href="{{ asset('employee/salary_pdf/'.$item->pdf_file) }}">Download</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan='3' align='center'>No Data Found!</td>
                                        </tr>
                                    @endforelse
                                </tbody>

                            </table>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </section>
        </div>


    </div>
@endsection
