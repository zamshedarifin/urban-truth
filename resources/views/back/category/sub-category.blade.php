@extends('back.layouts.app')
@section('title','Sub Category')
@section('content')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Manage Sub-Category</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage Sub-Category</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xxl-6">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Add New Sub-Category</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="live-preview">
                                <form action="{{route('admin.sub-category')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="cat" class="form-label">Select Main Category <span class="text-danger">*</span></label>
                                                <select name="category" id="cat" class="form-control">
                                                    <option value="" disabled selected>Select Main Category</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="subCat" class="form-label">Sub-Category Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="sub_category_name" value="{{old('sub_category_name')}}"
                                                       placeholder="sub category name write here" id="subCat">
                                            </div>
                                        </div>

                                        <!--end col-->
                                        <div class="col-lg-12">
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if (session('save'))
                        <div class="alert alert-success">
                            {{ session('save') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Category List</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="live-preview">
                                <div class="table-responsive table-card">
                                    <table class="table align-middle table-nowrap table-striped-columns mb-0">
                                        <thead class="table-light">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Sub Category</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Create Date</th>
                                            <th scope="col">Added By</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($subCategories as $k=>$category)
                                            <tr>
                                                <td><a href="#" class="fw-medium">{{$k+1}}</a></td>
                                                <td>{{$category->name}}</td>
                                                <td>{{$category->MainCategory->name}}</td>
                                                <td>{{date('d M Y',strtotime($category->created_at))}}</td>
                                                <td>{{$category->admin->name}}</td>
                                                <td>
                                                    @if($category->active == 1)
                                                        <a href="{{route('admin.sub-category.status',$category->id)}}">
                                                            <span class="badge bg-success">Active</span>
                                                        </a>
                                                    @else
                                                        <a href="{{route('admin.sub-category.status',$category->id)}}">
                                                            <span class="badge bg-danger">Inactive</span>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class=" text-danger text-center">No Data Available!</td>

                                            </tr>
                                        @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->

        </div>
        <!-- container-fluid -->
    </div>
@stop
