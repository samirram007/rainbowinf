@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">

            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title mb-2">Employee Salary Details</h3>
                                <h5> <strong>Employee Name : </strong> {{ $details->name }}</h5>
                                <h5> <strong>ID No : </strong> {{ $details->id_no}}</h5>
                                <h5> <strong>Designation : </strong> {{ $details['designation']['name']}}</h5>
                               
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table  class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="5%">SL</th>
                                                <th>Previous Salary</th> 
                                                <th>Present Salary</th> 
                                                <th>Increment Salary</th> 
                                                <th>Effected Date</th> 
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($salary_log as $key=>$data)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td> 
                                                    <td>{{ $data->previous_salary }}</td> 
                                                    <td>{{ $data->present_salary }}</td> 
                                                    <td>{{ $data->increment_salary }}</td> 
                                                    
                                                    <td>{{\Carbon\Carbon::parse( $data->effected_salary )->format('d-M-Y')}}  </td> 
                                                    
                                                </tr>
                                            @empty
                                            @endforelse


                                        </tbody>
                                        {{-- <tfoot>
                                            <tr>
                                                <th>SL</th>
                                                <th>Role</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Action</th>

                                            </tr>
                                        </tfoot> --}}
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->


                        <!-- /.box -->
                    </div>
                </div>


            </section>
        </div>


    </div>
@endsection
