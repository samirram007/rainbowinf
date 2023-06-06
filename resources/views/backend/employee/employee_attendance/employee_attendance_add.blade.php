@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Add Attendance </h4>
                        {{-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                {{-- <form method="POST" action="{{ route('store.salary.increment', $employee->id) }}"> --}}
                                <form method="POST" action="{{ route('store.employee.attendance') }}">
                                    @csrf
                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Date <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="date" name="date" class="form-control"
                                                        value={{ date('Y-m-d') }} aria-invalid="false">
                                                    @error('date')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class=" table table-bordered table-stripped w-full">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2" class="text-center" style="vertical-align: middle;">SL</th>
                                                        <th rowspan="2" class="text-center" style="vertical-align: middle;">Employee List</th>
                                                        <th colspan="3" class="text-center" style="vertical-align: middle; width:30%;">Attendance Status</th>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center btn present_all" style="display: table-cell; background-color:#363636 ">Present</th>
                                                        <th class="text-center btn leave_all" style="display: table-cell; background-color:#363636 ">Leave</th>
                                                        <th class="text-center btn absent_all" style="display: table-cell; background-color:#363636 ">Absent</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   @foreach ($employees as $key => $emp )
                                                       
                                                   
                                                    <tr id="div{{$emp->id}}" class="text-center">
                                                        <input type="hidden" name="employee_id[]" value="{{ $emp->id}}">
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $emp->name}}</td>
                                                        <td colspan="3">
                                                            <div class="switch-toggle switch-3 switch-candy d-flex justify-content-between ">
                                                                <div   >
                                                                <input type="radio" name="attent_status{{$key}}" value="Present" id="present{{$key}}"  checked="checked">
                                                                <label for="present{{$key}}">Present</label>
                                                                </div>
                                                                
                                                                <div  >
                                                                <input type="radio" name="attent_status{{$key}}" value="Leave" id="leave{{$key}}" >
                                                                <label for="leave{{$key}}">Leave</label>
                                                                </div>
                                                                
                                                                <div  >
                                                                <input type="radio" name="attent_status{{$key}}" value="Absent" id="absent{{$key}}" >
                                                                <label for="absent{{$key}}">Absent</label>
                                                                </div>
                                                                
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>



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
        $(document).ready(function() {
            $(document).on('change', "#leave_purpose_id", function() {
                var leave_purpose_id = $(this).val();
                if (leave_purpose_id == '0') {
                    $("#add_another").show();
                } else {
                    $("#add_another").hide();
                }
            });
        });
    </script>
@endsection
