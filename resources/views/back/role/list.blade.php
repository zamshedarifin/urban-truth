@extends('back.layouts.app')
@section('title')
    Role List
@stop
@section('content')
    <style>
        .invalid-feedback {
            display: block;
            width: 100%;
            margin-top: .25rem;
            font-size: 80%;
            color: #dc3545;
        }
    </style>
    <!-- Content Header (Page header) -->


    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Role List</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-12">
                                        @if (session('update'))
                                            <div class="callout callout-success">
                                                <h5><i class="fas fa-info"></i> Note:</h5>
                                                {{ session('update') }}
                                            </div>
                                        @endif
                                        @if (session('error'))
                                            <div class="callout callout-danger">
                                                <h5><i class="fas fa-info"></i> Note:</h5>
                                                {{ session('error') }}
                                            </div>
                                        @endif
                                        <div class="table-responsive">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Role Name</th>
                                                    <th style="text-align:center;">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($roles as $role)
                                                    <tr>
                                                        <td><?php echo $role->id; ?></td>
                                                        <td><?php echo $role->role_name; ?></td>
                                                        <td>
                                                            <a class="btn btn-primary btn-sm margin tdata"
                                                               href='{{url("admin/user/role/edit?id={$role->id}")}}'>Edit</a>
                                                            <?php if($role->active == 1){ ?>
                                                            <a class="btn btn-success btn-flat btn-sm tdata"
                                                               href='{{url("admin/user/role/deactive?id={$role->id}")}}'
                                                               alt="Deactive" title="Deactive">Active</a>
                                                            <?php }else{ ?>
                                                            <a class="btn btn-danger btn-flat btn-sm tdata"
                                                               href='{{url("admin/user/role/active?id={$role->id}")}}'
                                                               alt="Active" title="Active">Deactive</a>
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
    <script>
        $(document).ready(function () {
            $("#input-file").fileinput({
                showUpload: false,
                dropZoneEnabled: true,
                maxFileCount: 10,
                inputGroupClass: "input-group-md"
            });
        });
    </script>
@endsection
