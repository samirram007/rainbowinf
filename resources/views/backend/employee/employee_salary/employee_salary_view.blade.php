@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">

            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Employee Salary List</h3>
                                <a href="{{ route('employee.salary.add') }}" class="float-right btn btn-rounded btn-success mb-5">Add
                                    Employee Salary</a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="5%">SL</th>
                                                <th>Name</th> 
                                                <th>ID No</th> 
                                                <th>Mobile</th> 
                                                <th>Gender</th> 
                                                <th>Join Date</th> 
                                                <th>Salary</th> 
                                               
                                                <th width="20%">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($allData as $key=>$data)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td> 
                                                    <td>{{ $data->name }}</td> 
                                                    <td>{{ $data->id_no }}</td> 
                                                    <td>{{ $data->mobile }}</td> 
                                                    <td>{{ $data->gender }}</td> 
                                                    <td>{{\Carbon\Carbon::parse( $data->join_date )->format('d-M-Y')}}  </td> 
                                                    <td>{{ $data->salary }}</td> 
                                                    
                                                    <td>
                                                        <a title="Increment" href="{{ route('employee.salary.increment',$data->id)}}" class="btn btn-info"><i class="fa fa-plus-circle"></i></a>
                                                        <a  title="Details" href="{{ route('employee.salary.details',$data->id)}}" class="btn btn-danger"  ><i class="fa fa-eye"></i></a>
                                                    </td>
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
