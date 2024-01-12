@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">
        <div class="container-full">

            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">

                                {{-- <h3 class="box-title">Album :: <span class="h4">  {{ $album->name }}</span></h3> --}}
                                <nav aria-label="breadcrumb navbar-dark">
                                    <ol class="breadcrumb bg-transparent">
                                      <li class="breadcrumb-item h4"> <a href="{{ route('gallery.view') }}" ><strong>Album<strong></a> </li>
                                      <li class="breadcrumb-item active mx-2" aria-current="page"> / {{ $album->name }}</li>
                                    </ol>
                                  </nav>

                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col">
                                        <form method="POST" action="{{ route('store.gallery',$album->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="album_id" value="{{$album->id}}">
                                            <input type="hidden" name="details"   value="">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Image Name<span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control"
                                                                aria-invalid="false" value="{{ $album->name }}-{{ count($allData)>0 ?count($allData)+1:1  }}">
                                                            @error('name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Image <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="file" name="image" id="image" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <img id="showImage"
                                                                style="width: 100px; height:100px; border:1px solid #000000;"
                                                                src="{{ url('upload/no_image.jpg') }}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
         <hr> <br>
                                            <div class="row mt-5 pt-5">


                                                <div class="col-12">
                                                    <div class="text-xs-right">
                                                        <input type="submit" class="btn btn-rounded btn-info text-uppercase "
                                                            value="Add to this album">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                        </form>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>


                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="5%">SL</th>

                                                <th>Name</th>
                                                {{-- <th>Details</th>  --}}
                                                <th width="10%">Image</th>

                                                <th width="10%">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($allData as $key=>$data)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $data->name }} </td>

                                                    {{-- <td>{!! $data->details !!}</td>  --}}
                                                    <td> <div class="form-group">
                                                        <div class="controls">
                                                            <img id="showImage" style="width: 80px; height:80px border:1px solid #000000;"
                                                            src="{{ (!empty($data->image)? url('upload/gallery_images/thumbnail/'.$data->image) : url('upload/no_image.jpg') )}}"
                                                             alt=""  data-toggle="modal"
                                                             data-target="#exampleModalCenter">
                                                        </div>
                                                    </div></td>
                                                    <td>
                                                        {{-- <a href="{{ route('image.view',$data->id)}}" class="btn btn-default"><i class="fa fa-desktop"></i></a> --}}
                                                        <a href="{{ route('image.edit',$data->id)}}" class="btn btn-info"><i class="fa fa-edit"></i> </a>
                                                        {{-- <a href="{{ route('gallery.delete',$data->id)}}" class="btn btn-danger" id="delete"><i class="fa fa-recycle"></i></a> --}}
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
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header  bg-success">
                <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
                {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
            </div>
            <div class="modal-body mx-auto bg-secondary">
                <img id="ModalImage" style="height:80vh;" src="" alt="image content here.">
            </div>
            <div class="modal-footer bg-success">
                {{-- <button type="button" class="btn btn-light" data-dismiss="modal">Close</button> --}}
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);

            });
        });
    </script>
       <script>
        $(document).ready(function() {
            $("img").click(function(e) {
                // data-toggle="modal" data-target="#exampleModalCenter"
                var imgsrc = e.target.src;
                $("#ModalImage").attr('src', imgsrc);
                $("#exampleModalCenter").modal();
            });
        });
        </script>
@endsection
