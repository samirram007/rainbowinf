@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Edit Employee Leave </h4>
                        {{-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                {{-- <form method="POST" action="{{ route('store.salary.increment', $employee->id) }}"> --}}
                                <form method="POST" action="{{ route('update.employee.leave',$editData->id)}}">
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Employee Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="employee_id" id="employee_id" required=""
                                                        class="form-control">
                                                        <option value="" required=" disabled="">Select Employee Name</option>
                                                                 @foreach ($employees as
                                                            $emp)
                                                        <option value="{{ $emp->id }}" {{ ($editData->employee_id==$emp->id) ? 'selected':''}}>{{ $emp->name }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Leave Purpose <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="leave_purpose_id" id="leave_purpose_id" required=""
                                                        class="form-control">
                                                        <option value="" required=" disabled="">Select Leave Purpose</option>
                                                                 @foreach ($leave_purpose as
                                                            $purpose)
                                                        <option value="{{ $purpose->id }}" {{ ($editData->leave_purpose_id==$purpose->id) ? 'selected':''}}>{{ $purpose->name }}</option>
                                                        @endforeach
                                                        <option value="0"   >New Purpose + </option>
                                                    </select>
                                                    <input type="text" name="name" style="display: none;" id="add_another" class="form-control" placeholder="Write Purpose">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Start Date <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="date" name="start_date" class="form-control"
                                                        value={{ $editData->start_date }} aria-invalid="false">
                                                    @error('start_date')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>End Date <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="date" name="end_date" class="form-control"
                                                        value={{ $editData->end_date }} aria-invalid="false">
                                                    @error('end_date')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-info " value="Update">
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
        $(document).on('change',"#leave_purpose_id", function(){
            var leave_purpose_id= $(this).val();
            if(leave_purpose_id=='0'){
                $("#add_another").show();
            }
            else{
                $("#add_another").hide();
            }
        });
    });
    
    </script>
@endsection
