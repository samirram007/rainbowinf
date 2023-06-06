@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Add Employee </h4>
                        {{-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="POST" action="{{ route('store.employee.registration') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            
                                            <div class="row">
                                            <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>ID_No <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="id_no" class="form-control"
                                                                required="" aria-invalid="false">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Employee Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="name" class="form-control"
                                                                required="" aria-invalid="false">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Father's Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="father_name" class="form-control"
                                                                required="" aria-invalid="false">
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Mother's Name <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="hidden" name="mother_name" class="form-control"
                                                                required="" aria-invalid="false">
                                                        </div>
                                                    </div>
                                                </div> --}}

                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Mobile Number <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="mobile" class="form-control"
                                                                required="" aria-invalid="false">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Email <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="email" name="email" class="form-control"
                                                                required="" aria-invalid="false">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Address <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="address" class="form-control"
                                                                required="" aria-invalid="false">
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Gender <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="gender" id="gender" required=""
                                                                class="form-control">
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Religion <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="religion" id="religion" required=""
                                                                class="form-control">
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Muslim">Muslim</option>
                                                                <option value="Christan">Christan</option>
                                                                <option value="Sikh">Sikh</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Nationality <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="nationality" id="nationality" required=""
                                                                class="form-control">
                                                                <option value="Indian">Indian</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Date Of Birth <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="date" name="dob" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Aadhaar number<span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="aadhaar_no" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>PAN number<span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="pan_no" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                             <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Office <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="office_id" id="office_id" required=""
                                                                class="form-control">
                                                                <option value="" required=" disabled="">Select Office</option>
                                                                @foreach ($office as $desig)
                                                                    <option value="{{$desig->id}}">{{$desig->name}}</option>
                                                                @endforeach
                                                                 
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                             <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Department <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="department_id" id="department_id" required=""
                                                                class="form-control">
                                                                <option value="" required=" disabled="">Select Department</option>
                                                                @foreach ($department as $desig)
                                                                    <option value="{{$desig->id}}">{{$desig->name}}</option>
                                                                @endforeach
                                                                 
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Designation <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="designation_id" id="designation_id" required=""
                                                                class="form-control">
                                                                <option value="" required=" disabled="">Select Designation</option>
                                                                @foreach ($designation as $desig)
                                                                    <option value="{{$desig->id}}">{{$desig->name}}</option>
                                                                @endforeach
                                                                 
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Joining Date <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="date" name="join_date" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Salary<span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="salary" class="form-control"
                                                                required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <h5>Profile Image <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="file" name="image" id="image" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <img id="showImage" style="width: 100px; height:100px border:1px solid #000000;" 
                                                            src="{{ (!empty($user->image)? url('upload/employee_images/'.$user->image) : url('upload/no_image.jpg') )}}" 
                                                             alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>



                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-info " value="Submit">
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader=new FileReader();
                reader.onload=function(e){
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
    
            });
        });
    </script>
@endsection
