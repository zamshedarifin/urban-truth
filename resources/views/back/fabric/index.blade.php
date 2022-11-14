@extends('back.layouts.app')
@section('title','Category')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Fabric</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item">Fabrics</li>
                                <li class="breadcrumb-item active"> List</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Fabrics List</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div id="customerList">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                                    id="create-btn" data-bs-target="#fabricModal"><i
                                                    class="ri-add-line align-bottom me-1"></i> Add
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-sm">
                                        <div class="d-flex justify-content-sm-end">
                                            <div class="search-box ms-2">
                                                <input type="text" class="form-control search" placeholder="Search...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                        <thead class="table-light">
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Care</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                        @forelse($fabrics as $k => $fabric)
                                            <tr>
                                                <td>{{$k+1}}</td>
                                                <td>{{ \Illuminate\Support\Str::limit($fabric->name,40) }}</td>
                                                <td>{{ \Illuminate\Support\Str::limit($fabric->care,60) }}</td>


                                                <td class="status">
                                                    @if($fabric->active == 1)
                                                        <span
                                                            class="badge badge-soft-success text-uppercase">Active</span>
                                                    @else
                                                        <span
                                                            class="badge badge-soft-danger text-uppercase">In-active</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <button class="btn btn-sm btn-success edit-item-btn"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#editFabric"
                                                                    data-title="{{ $fabric->name }}"
                                                                    data-care="{{ $fabric->care }}"
                                                                    data-id="{{ $fabric->id }}">
                                                                Edit
                                                            </button>
                                                        </div>
                                                        <div class="delete">
                                                            <a class="btn btn-sm btn-danger"  onclick="return confirm('Are you sure you want to delete this fabric?');" href="{{route('admin.fabric.delete',$fabric->id)}}" class="href">Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5">
                                                    <div class="noresult">
                                                        <div class="text-center">
                                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json"
                                                                       trigger="loop"
                                                                       colors="primary:#121331,secondary:#08a88a"
                                                                       style="width:75px;height:75px"></lord-icon>
                                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                                            <p class="text-muted mb-0">We've searched more than 150+
                                                                Orders We did not find any orders for you search.</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse

                                        </tbody>
                                    </table>

                                </div>


                            </div>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
    </div>
@include('back.include.modal')


@stop

@push('js')

    <script>
        $('.edit-item-btn').on('click', function () {
            var modal = $('#editFabric');
            modal.find('input[name=title]').val($(this).data('title'));
            modal.find('input[name=id]').val($(this).data('id'));
            modal.find('textarea[name=care]').val($(this).data('care'));
        });
    </script>

@endpush
