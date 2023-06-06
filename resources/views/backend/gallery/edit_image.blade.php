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
                                      <li class="breadcrumb-item active mx-2" aria-current="page"> / {{ $editData['album']->name }} [Edit Mode]</li>
                                    </ol>
                                  </nav>
                                
                            </div>
                              {{-- @dd($editData['album']) --}}
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col">
                                        <form method="POST" action="{{ route('update.image',$editData->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="album_id" value="{{$editData->album_id}}">
                                            <input type="hidden" name="details"   value="">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Image Name<span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control"
                                                                aria-invalid="false" value="{{ $editData->name }} ">
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
                                                                src="{{ !empty($editData->image) ? url('upload/company/' . $editData->image) : url('upload/no_image.jpg') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
         <hr> <br>
                                            <div class="row mt-5 pt-5">
                                               
        
                                                <div class="col-12">
                                                    <div class="text-xs-right">
                                                        <input type="submit" class="btn btn-rounded btn-info text-uppercase "
                                                            value="Update this image">
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

                            
                         
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->


                        <!-- /.box -->
                    </div>
                </div>


            </section>
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
  
@endsection
