@extends('back.layouts.app')
@section('title','Category')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Category</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item">Category</li>
                                <li class="breadcrumb-item active"> Manage Category</li>
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
                            <h4 class="card-title mb-0">Category List</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div id="customerList">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal"
                                                    id="create-btn" data-bs-target="#showModal"><i
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
                                            <th>Category Name</th>
                                            <th>Created By</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                        @forelse($categories as $k => $category)
                                            <tr>
                                                <td class="id">{{$k+1}}</td>
                                                <td class="category">{{$category->title}}</td>
                                                <td class="created_by">{{$category->Admin->name}}</td>


                                                <td class="status">
                                                    @if($category->status == 1)
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
                                                                    data-bs-target="#editModal"
                                                                    data-title="{{ $category->title }}"
                                                                    data-id="{{ $category->id }}">
                                                                Edit
                                                            </button>
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

    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light p-3">
                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-modal"></button>
                </div>
                <form action="{{route('admin.category')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3" id="modal-id">
                            <label for="id-field" class="form-label">Category Title</label>
                            <input type="text" id="id-field" class="form-control  @error('title') is-invalid @enderror"
                                   placeholder="Category Title" name="title" value="{{old('title')}}"/>
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="submit" class="btn btn-success" id="add-btn">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{--    Edit Modal--}}
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light p-3">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-modal"></button>
                </div>
                <form action="{{route('admin.category.update')}}" method="post">
                    @csrf
                    <input type="hidden" name="id">
                    <div class="modal-body">
                        <div class="mb-3" id="modal-id">
                            <label for="id-field" class="form-label">Category Title</label>
                            <input type="text" id="id-field" class="form-control  @error('title') is-invalid @enderror"
                                   placeholder="Category Title" name="title" value="{{old('title')}}"/>
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="submit" class="btn btn-success" id="add-btn">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@push('js')

    <script>
        $('.edit-item-btn').on('click', function () {
            var modal = $('#editModal');
            modal.find('input[name=title]').val($(this).data('title'));
            modal.find('input[name=id]').val($(this).data('id'));
        });
    </script>

@endpush
