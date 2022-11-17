@extends('back.layouts.app')
@section('title','Product List')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Product</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item">Products</li>
                                <li class="breadcrumb-item active"> Product List</li>
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
                            <h4 class="card-title mb-0">Product List</h4>
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
                                            <th>SL</th>
                                            <th style="text-align:center;">Image</th>
                                            <th>Name</th>
                                            <th>Style Code</th>
                                            <th>Category - Sub Category</th>
                                            <th>Date</th>
                                            <th>Created By</th>
                                            <th style="text-align:center;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                        @forelse($products as $k=>$product)
                                            <tr>

                                                <td>{{$k+1}}</td>
                                                <td>
                                                    <img style="height: 80px; width: 60px" class="img-responsive" src="{{ asset('pgallery/'.$product->product_img_thm) }}" alt=""/>
                                                </td>
                                                <td>{{$product->product_name}}</td>
                                                <td>{{$product->product_styleref}}</td>
                                                <td>{{ $product->category->title .'->'. $product->childCategory->title}}</td>
                                                <td>{{date('d M Y',strtotime($product->add_date))}}</td>
                                                <td>{{$product->admin->name}}</td>

                                                <td style="text-align:center;">
                                                    <a class="btn bg-info btn-sm text-white" data-toggle="tooltip"
                                                       data-placement="top" title="Edit"
                                                       href="{{route('admin.product.edit',$product->id)}}"><i
                                                            class="ri-pencil-fill"></i></a>
                                                </td>
                                            </tr>
                                        @empty

                                            <tr>
                                                <td colspan="8">
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

@stop
