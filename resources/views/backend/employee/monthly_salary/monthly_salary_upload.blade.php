@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">

        <h3 class="d-flex float-right px-4 py-2"><a href="{{ route('monthly.salary.manage') }}">
                <-Go back</a>
        </h3>
        <div class="container d-flex justify-content-center align-items-center">
            <div class="card px-3 pb-3 pt-1" style="width: 28rem; margin-top:3%;">
                <h2 class="title fs-3">Upload Your Salary's Pdf</h2>
                <h4><span>Id_no:</span>&nbsp;&nbsp;&nbsp;{{ $employees->id_no }}</h4>
                <h4><span>Name:</span>&nbsp;&nbsp;{{ $employees->name }}</h4>
            </div>
        </div>
        <div class="container">
            
            <form action="{{route('montly.salary.upload',$employees->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="employee_id" id="employee_id" value="{{$employees->id}}" class="sr-only">
                <input type="date" name="month" id="month" class="form-control" aria-invalid="false">
                <div class="row d-flex justify-content-center align-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pdf_file" class="h4">Upload PDF</label>
                            <input type="file" name="pdf_file" id="file_pdf" class="form-control">
                            <span class="text-danger">
                                @error('pdf_file')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center mt-3">
                        <input type="submit" class="btn btn-rounded btn-info " value="Upload">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
