@extends('back.layouts.app')
@section('title', 'Edit Product Image')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Product</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item">Product</li>
                                <li class="breadcrumb-item">List</li>
                                <li class="breadcrumb-item"><a href="{{route('admin.product.edit',$productId)}}">Edit</a></li>
                                <li class="breadcrumb-item active">Update Image</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Update Image for "{{$product->product_styleref}}"</h4>
                        </div><!-- end card header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                                <form name="add_product" id="myform" action="{{url('/admin/product/image/update')}}"
                                      method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" class="form-control" name="id" value="{{$image->id}}"/>
                                    <input type="hidden" name="serial" class="form-control" value="{{$serial}}"/>
                                    <input type="hidden" name="product_id" class="form-control" value="{{$productId}}" />


                                    <div class="form-group">
                                        <label for="campus_id">Image Order</label>
                                        <input type="text" class="form-control" name="productimg_order"
                                               value="{{$image->productimg_order}}" required/>
                                        <span class="help-text"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Current Image</label>
                                        <div class="mb10">
                                <span class="file-input">
                                    <div class="file-preview">
                                        <div class="close fileinput-remove text-right"><a href="#"
                                                                                          onclick="confirm_modal('#');">×</a></div>
                                        <div class="file-preview-thumbnails">
                                            <div class="file-preview-frame" id="preview">
                                                <img class="img-responsive"
                                                     src="{{asset('pgallery/'.$image->productimg_img_thm)}}"
                                                     class="file-preview-image" title="" alt=""
                                                     style="width:auto;height:160px;">
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="file-preview-status text-center text-success"></div>
                                        <div class="kv-fileinput-error file-error-message" style="display: none;"></div>
                                    </div>
                                </span>
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('filename') ? ' has-error' : '' }}">
                                        <label>New Image</label>
                                        <input id="input-file" type="file"
                                               class="form-control clone_field file input-file" name="filename"
                                               data-browse-on-zone-click="true">
                                        <span class="help-block" style="color:#06be1c">[ Image Type: jpeg or jpg, Width: 1300 Px Height: 1667 PX ]</span>
                                        <div class="help-block with-errors">{{ $errors->first('filename') }}</div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="submit" name="btnsubmit"
                                                class="submitbtn btn btn-primary float-right">  Update Product Image
                                        </button>
                                        <a class="btn btn-danger" href="{{route('admin.product.edit',$productId)}}">Back
                                        </a>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.content -->
            <!-- Ajax modal ---->
            <div class="modal fade" id="modal-delete">
                <div class="modal-dialog">
                    <div class="modal-content" style="margin-top:100px;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" style="text-align:center;color:black;">Are you sure to deactive
                                this?</h4>
                        </div>
                        <div class="modal-footer" style="margin:0px;border-top:0px;text-align:center;">
                            <a href="#" class="btn btn-sm btn-danger" id="delete_link">Confirm</a>
                            <button type="button" class="btn btn-sm btn-info" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--- Ajax modal end ---->
        </div>
    </div>
    <style>
        .form-group {
            margin-bottom: 1rem;
        }

        label:not(.form-check-label):not(.custom-file-label) {
            font-weight: 700;
        }

        label {
            display: inline-block;
            margin-bottom: 0.5rem;
        }
    </style>
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
