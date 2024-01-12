@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">

            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Gallery :: <span class="h4"> Album List</span></h3>
                                <a href="{{ route('album.add') }}" class="float-right btn btn-rounded btn-success mb-5">Add
                                    Album</a>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="5%">SL</th>

                                                <th>Name</th>
                                                <th>Details</th>
                                                <th width="10%">Image</th>

                                                <th width="20%">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($allData as $key=>$data)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{!! $data->details !!}</td>
                                                    <td> <div class="form-group">
                                                        <div class="controls">
                                                            <img id="showImage" style="width: 80px; height:80px border:1px solid #000000;"
                                                            src="{{ (!empty($data->image)? url('upload/gallery_images/thumbnail/'.$data->image) : url('upload/no_image.jpg') )}}"
                                                             alt="">
                                                        </div>
                                                    </div></td>
                                                    <td>
                                                        <a href="{{ route('album.view',$data->id)}}" class="btn btn-default"><i class="fa fa-desktop"></i></a>
                                                        <a href="{{ route('album.edit',$data->id)}}" class="btn btn-info"><i class="fa fa-edit"></i> </a>
                                                        <a href="{{ route('gallery.delete',$data->id)}}" class="btn btn-danger delete" id="delete"><i class="fa fa-recycle"></i></a>
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
