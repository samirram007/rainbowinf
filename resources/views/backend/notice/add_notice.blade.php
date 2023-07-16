@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Add Notice </h4>
                        {{-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="POST" action="{{ route('store.notice') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Notice Title <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control"
                                                        aria-invalid="false" value="{{ old('name') }}">
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
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
                                                    <input type="datetime-local" name="published_at" class="form-control"
                                                        aria-invalid="false"
                                                        value="{{ old('published_at') != null ? old('published_at') : Carbon\Carbon::now()->format('Y-m-d') . 'T' . Carbon\Carbon::now()->format('H:i') }}">
                                                    @error('published_at')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    {{-- <div class="row">
                                         <div class="col-12">
                                           <div class="form-group">
                                                <h5>Briefing <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="details" class="form-control"
                                                          aria-invalid="false" >
                                                          <textarea class="form-control" name="details" id="details" cols="30" rows="8">{{old('details')}}</textarea>
                                                         
                                                             
                                                     
                                                        @error('details')
                                                        <span class="text-danger">{{ $message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="box">
                                            {{-- <div class="box-header">
                                              <div class="box-title">Briefing<br>
                                                <small>Advanced and full of features</small>
                                              </div>
                                            </div> --}}
                                            <!-- /.box-header -->
                                            {{-- <div class="box-body">
                                                <h5>Briefing<span class="text-danger">*</span></h5>
                                                    <textarea id="editor1" name="details" rows="10" cols="80">{{old('details')}}</textarea>
                                               
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-info text-uppercase "
                                            value="Confirm and publish this notice">
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

    <script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js') }}"></script>
    <script src="{{ asset('backend/js/pages/editor.js') }}"></script>
@endsection
