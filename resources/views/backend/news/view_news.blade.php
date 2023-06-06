@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">

            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">News List</h3>
                                <a href="{{ route('news.add') }}" class="float-right btn btn-rounded btn-success mb-5">Add
                                    News</a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="5%">SL</th>
                                                
                                                <th>HeadLine</th> 
                                                <th>Details</th> 
                                                <th width="10%">Published Date</th> 
                                                <th width="5%">Status</th> 

                                                <th width="15%">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($allData as $key=>$data)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td> 
                                                    <td>{{ $data->name }}</td> 
                                                    <td>{!! $data->details !!}</td> 
                                                    <td>{{ $data->published_at }}</td> 
                                                    <td>{{ $data->status }}</td> 
                                                    <td>
                                                        <a href="{{ route('news.single',$data->id)}}" class="btn btn-default"><i class="fa fa-desktop"></i></a>
                                                        <a href="{{ route('news.edit',$data->id)}}" class="btn btn-info"><i class="fa fa-edit"></i> </a>
                                                        <a href="{{ route('news.delete',$data->id)}}" class="btn btn-danger" id="delete"><i class="fa fa-recycle"></i></a>
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
