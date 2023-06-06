@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">

            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Employee Leave </h3>
                                <a href="{{ route('employee.leave.add') }}" class="float-right btn btn-rounded btn-success mb-5">Add
                                    Employee Leave</a>
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
                                                <th>Purpose</th> 
                                                <th>Start Date</th> 
                                                <th>End Date</th> 
                                                <th width="25%">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($allData as $key=>$data)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td> 
                                                    <td>{{ $data['user']['name']}}</td> 
                                                    <td>{{ $data['user']['id_no']}}</td> 
                                                    <td>{{ $data['purpose']['name']}}</td> 
                                                    <td>{{ date('d-M-Y',strtotime($data->start_date)) }}</td> 
                                                    <td>{{ date('d-M-Y',strtotime($data->end_date)) }}</td> 
                                                    <td>
                                                        <a href="{{ route('employee.leave.edit',$data->id)}}" class="btn btn-info">Edit</a>
                                                        <a href="{{ route('employee.leave.delete',$data->id)}}" class="btn btn-danger" id="delete">Delete</a>
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
