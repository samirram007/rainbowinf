@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Edit Notice </h4>
                        {{-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                {{-- @dd($noticeData) --}}
                                <form method="POST" action="{{ route('update.notice',$noticeData->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                           <div class="form-group">
                                                <h5>Notice Title <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control"
                                                          aria-invalid="false" value="{{old('name')}}{{$noticeData->name}}">
                                                        @error('name')
                                                        <span class="text-danger">{{ $message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>File<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="pdf_file" class="form-control"
                                                        aria-invalid="false"
                                                        value="{{ old('pdf_file')}}" accept="application/pdf">
                                                    @error('pdf_file')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                 <h5>Publishing Date<span class="text-danger">*</span></h5>
                                                 <div class="controls">
                                                     <input type="datetime-local" id="published_at" name="published_at" class="form-control"
                                                           aria-invalid="false" value="{{ date('Y-m-d\TH:i', strtotime($noticeData->published_at))}}" >
                                                         @error('published_at')
                                                         <span class="text-danger">{{ $message}}</span>
                                                        @enderror
                                                 </div>
                                             </div>
                                         </div>
                                    </div>
                                    
                                    
                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-info text-uppercase " value="update and publish this notice">
                                    </div>
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
    <script>
        var today = new Date();
        $("#datetime").datetimepicker({
            format: 'yyyy-mm-dd hh:ii',
            autoclose: true,
            todayBtn: true,

            startDate : today
        });
    </script>
        <script src="{{ asset('backend/js/vendors.min.js')}}"></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js')}}"></script>	
	<script src="{{ asset('assets/vendor_components/ckeditor/ckeditor.js')}}"></script>
	<script src="{{ asset('assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js')}}"></script>
	<script src="{{ asset('backend/js/pages/editor.js')}}"></script>
  
@endsection
