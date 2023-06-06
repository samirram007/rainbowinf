@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Employee Salary Increment </h4>
                        {{-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> --}}
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="POST" action="{{ route('store.salary.increment',$editData->id) }}">
                                    @csrf
                                    <div class="row">
                                        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Salary Amount <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="increment_salary" class="form-control"
                                                        value={{$editData->salary}}
                                                              aria-invalid="false">
                                                            @error('increment_salary')
                                                            <span class="text-danger">{{ $message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Effective Date <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="date" name="effected_salary" class="form-control"
                                                        value={{ date('Y-m-d')}}
                                                              aria-invalid="false">
                                                            @error('effected_salary')
                                                            <span class="text-danger">{{ $message}}</span>
                                                        @enderror
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
@endsection
