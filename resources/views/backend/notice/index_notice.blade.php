@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">

            <section class="content">
                <div class="row">
                    <div class="col-12">

                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Notice List</h3>
                                @if (auth()->user()->role == 'admin')
                                    <a href="{{ route('notice.add') }}"
                                        class="float-right btn btn-rounded btn-success mb-5">Add
                                        Notice</a>
                                @endif
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="5%">SL</th>

                                                <th>Title</th>
                                                <th>Published Date</th>

                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($allData as $key=>$data)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->published_at }}</td>
                                                    <td>
                                                        <a class="btn btn-success" id="notice_download"
                                                            title="Notice Download" target="_blank"
                                                            href="{{ asset('notice/' . $data['pdf_file']) }}"><i
                                                                class="fa fa-download"></i></a>
                                                        @if (auth()->user()->role == 'admin')
                                                            <a href="{{ route('notice.edit', $data->id) }}"
                                                                class="btn btn-info"><i class="fa fa-edit"></i> </a>
                                                            <a href="{{ route('notice.delete', $data->id) }}"
                                                                class="btn btn-danger" id="delete"><i
                                                                    class="fa fa-recycle"></i></a>
                                                        @endif
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
