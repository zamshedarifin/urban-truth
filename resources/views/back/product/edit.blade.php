@extends('back.layouts.app')
@section('title','Product Edit')
@section('content')

    <?php

    use App\Http\Controllers\Admin\Product\Managestock;
    use App\Http\Controllers\Admin\Product\Managecolor;
    ?>

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
                                <li class="breadcrumb-item">List</li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <form action="{{route('admin.product.update',$product->id)}}" enctype="multipart/form-data"
                  method="post"> @csrf
                <div class="row">
                    <div class="col-lg-10 offset-1">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Basic</h4>

                            </div><!-- end card header -->
                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row gy-4">

                                        @if($errors->any())
                                            {{ implode('', $errors->all('<div>:message</div>')) }}
                                        @endif
                                        <div class="col-md-4">
                                            <div>
                                                <label for="txtstyleref" class="form-label">Style Code</label>
                                                <input class="form-control" type="text" id="required-input"
                                                       name="txtstyleref" value="{{$product->product_styleref}}"
                                                       id="txtstyleref" required>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div>
                                                <label for="txtproductname" class="form-label">Product Title</label>
                                                <input type="text" class="form-control" type="text"
                                                       name="txtproductname" id="txtproductname"
                                                       value="{{$product->product_name}}" required>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div>
                                                <label for="labelInput" class="form-label">Fabric Composition</label>
                                                <select class="form-control  @error('category') is-invalid @enderror"
                                                        id="fabric">
                                                    <option value="" disabled selected>Select category</option>
                                                    @foreach($fabrics as $fabric)
                                                        <option value="{{$fabric->id}}"
                                                                @if($product->fabric== $fabric->name ) selected @endif>{{$fabric->name}}</option>
                                                    @endforeach
                                                </select>
                                                <input type="hidden" name="fabric" id="fabric_add"/>
                                            </div>
                                        </div>
                                        <!--end col-->


                                        <div class="col-md-4">
                                            <div>
                                                <label for="category" class="form-label">Parent Category</label>
                                                <select class="form-control  @error('category') is-invalid @enderror"
                                                        name="category"
                                                        id="category">
                                                    <option value="" disabled selected>Select category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}"
                                                                @if($product->cat_id == $category->id ) selected @endif>{{$category->title}}</option>
                                                    @endforeach
                                                </select>
                                                @error('category')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div>
                                                <label for="subCat" class="form-label">Sub Category</label>
                                                <select
                                                    class="form-control  @error('sub_category') is-invalid @enderror"
                                                    name="sub_category" id="subCat">
                                                    <option value="" disabled selected>Select sub category</option>
                                                    @foreach($subcategories as $sub_cat)
                                                        <option value="{{$sub_cat->id}}"
                                                                @if($product->sub_cat_id == $sub_cat->id ) selected @endif>{{$sub_cat->title}}</option>
                                                    @endforeach
                                                </select>
                                                @error('sub_category')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div>
                                                <label for="childCat" class="form-label">Child Category</label>
                                                <select
                                                    class="form-control  @error('child_category') is-invalid @enderror"
                                                    name="child_category" id="childCat">
                                                    <option value="" disabled selected>Select child category</option>
                                                    @foreach($childcategories as $child_cat)
                                                        <option value="{{$child_cat->id}}"
                                                                @if($product->child_cat_id == $child_cat->id ) selected @endif>{{$child_cat->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->


                                        <div class="col-md-4">
                                            <div>
                                                <label for="in-range-input" class="form-label">Price</label>
                                                <input class="form-control" type="number" name="txtprice"
                                                       id="in-range-input" min="1" max="20000"
                                                       value="{{$product->product_price}}" required>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div>
                                                <label for="discount" class="form-label">Discount</label>
                                                <input class="form-control" type="number" name="txtpricediscounted"
                                                       id="discount" min="0" max="200" value="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div>
                                                <label for="pOrder" class="form-label">Product Order</label>
                                                <input class="form-control" type="number" name="txtorder" id="pOrder"
                                                       min="1" max="1000" value="{{$product->sold}}" readonly>
                                            </div>
                                        </div>
                                        <!--end col-->


                                        <div class="col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Collection</label>
                                                @foreach($campaigns as $campaign)
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox"
                                                               id="campaign{{$campaign->id}}" value="{{$campaign->id}}"
                                                               @if($product->isSpecial == $campaign->id ) checked
                                                               @endif name="campaign">
                                                        <label class="form-check-label" for="campaign{{$campaign->id}}">
                                                            {{$campaign->name}}
                                                        </label>
                                                    </div>
                                                @endforeach


                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-md-8">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Care
                                                    Description</label>
                                                <textarea class="form-control" type="text" name="txtproductcare"
                                                          id="care" rows="5"
                                                >{{$product->product_care}}</textarea>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-md-12">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Product
                                                    Description</label>
                                                <textarea class="ckeditor-classic" id="ckeditor-classic" type="text"
                                                          name="txtproductdetails">{!! $product->product_description !!}</textarea>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-md-12">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Size Chart
                                                    <input class="chartChk" type="checkbox" name="coupon_question"
                                                           value="1"
                                                           onchange="valueChanged()">
                                                </label>
                                                <table class="chart" style="display: table;">
                                                    <tbody>
                                                    <tr>
                                                        <th>Size</th>
                                                        <th>XS</th>
                                                        <th>S</th>
                                                        <th>M</th>
                                                        <th>L</th>
                                                        <th>XL</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Chest</td>
                                                        <td>
                                                            <input type="text" placeholder="31 - 33">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="33 - 35">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="35 - 37">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="37 - 39">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="39 - 42">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Waist</td>
                                                        <td>
                                                            <input type="text" placeholder="24 - 26">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="26 - 28">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="28 - 30">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="30 - 32">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="32 - 35">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hip</td>
                                                        <td>
                                                            <input type="text" placeholder="34 - 36">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="36 - 38">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="38 - 40">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="40 - 42">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="42 - 44">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Regular inseam</td>

                                                        <td>
                                                            <input type="text" placeholder="30">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="30½">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="31">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="31½">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="32">
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Long (Tall) Inseam</td>
                                                        <td>
                                                            <input type="text" placeholder="31½">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="32">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="32½">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="33">
                                                        </td>
                                                        <td>
                                                            <input type="text" placeholder="33½">
                                                        </td>

                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!--end col-->


                                    </div>
                                    <!--end row-->
                                </div>
                                <div class="col-sm-12" style="float: right;">
                                    <button type="submit"
                                            class="btn bg-dark btn-flat margin text-white"
                                            style="float: right; margin-right: 10px">Update Product
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->

                </div>
                <!--end row-->

            </form>

            <form action="{{route('admin.product.stock.update')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-10 offset-1 ">
                        <div class="card" style="padding: 10px">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Quantity</h4>
                            </div><!-- end card header -->
                            <table class="table table-condensed">
                                <tr>
                                    <th class="text-dark">#</th>
                                    <th class="text-dark">[Color] / [Size]</th>
                                    <th class="text-dark">Barcode</th>
                                    <th class="text-dark">Quantity</th>

                                    <th></th>
                                </tr>
                                <?php
                                $i = 0;
                                $size_qty = Managestock::GetSizeQty($product->id);
                                foreach ($size_qty as $prosize) {
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?>.</td>
                                    <td><?php echo '[' . $prosize->color_name . ']' . ' / [' . $prosize->productsize_size . ']'; ?></td>
                                    <td>
                                        <input class="form-control" type="text" name="barcode[]"
                                               value="{{ $prosize->barcode }}" placeholder="Barcode" required/>
                                    </td>
                                    <td>

                                        <input class="form-control" type="number" name="qty[]"
                                               value="<?php echo $prosize->SizeWiseQty; ?>">

                                        <input class="form-control" type="hidden" name="id[]"
                                               value="<?php echo $prosize->id; ?>">
                                    </td>
                                    <td>
                                        <a class="btn btn-danger btn-flat btn-sm tdata"
                                           href='{{route('admin.product.stock.delete',$prosize->id)}}'>Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                            <input type="hidden" id="total_loop" value="<?php echo $i; ?>">
                            <div class="box-footer" style="float: right;">
                                <div class="col-sm-12" style="float: right;">
                                    <button type="submit"
                                            class="btn bg-dark btn-flat margin text-white"
                                            style="float: right; margin-right: 10px">Update Quantity
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


            <div class="row">
                <div class="col-lg-10 offset-1 ">
                    <div class="card" style="padding: 10px">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Add New Quantity</h4>
                        </div><!-- end card header -->
                        <table class="table table-condensed">
                            <tr>
                                <th class="text-dark">Color</th>
                                <th class="text-dark">Size</th>
                                <th class="text-dark" style="width: 10%px">Quantity</th>
                                <th class="text-dark">Barcode</th>
                                <th class="text-dark">&nbsp;</th>
                            </tr>
                            <?php
                            $j = 0;
                            $color_wise_prosize = Managestock::GetColorProSize($product->id);
                            foreach ($color_wise_prosize as $color) {
                            $j++;
                            // $prosize = Managestock::GetExpectSize($color->product_id, $color->color_name);
                            ?>
                            <form action="{{route('admin.product.stock.add')}}" method="post">
                                @csrf
                                <input type="hidden" name="product_id"
                                       value="<?php echo $product->id; ?>"/>
                                <tr>
                                    <td>
                                        <input type="hidden" name="color_name"
                                               value=" <?php echo $color->color_name; ?>"/>
                                        <?php echo $color->color_name; ?>
                                    </td>
                                    <td>
                                        <select name="productsize_size" class="form-control"
                                                id="sizelist" required>
                                            <option value="">Select size</option>
                                            <?php foreach ($prosizes as $sizes) { ?>
                                            <option
                                                value="<?php echo $sizes->prosize_name; ?>"><?php echo $sizes->prosize_name; ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>

                                    <td>
                                        <input class="form-control" type="number"
                                               name="SizeWiseQty" placeholder="0" required/>
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="barcode"
                                               placeholder="Barcode" required/>
                                    </td>
                                    <td>
                                        <button type="submit"
                                                class="btn bg-primary btn-flat margin text-white">Add New Size
                                        </button>
                                    </td>
                                </tr>
                            </form>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 offset-1 ">
                    <div class="card" style="padding: 10px">
                        <div class="card-header">
                            <h3 class="card-title">Add New Product Album/Style for
                                '<?php echo $product->product_styleref; ?>'</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form name="add_product" id="myform" action="{{url('admin/product/album/save')}}"
                                  method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- SELECT2 EXAMPLE -->
                                <div class="box box-default">
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                    <input type="hidden" name="total_grp" id="myform" class="total_grp"
                                                           value="">
                                                    <input type="hidden" name="blank" id="blank" value="">
                                                    <div class="clone_grp">
                                                        <div class="product_style">
                                                            <div id="right_part">
                                                                <div class="formcontainer">
                                                                    <div class="formcontainer">
                                                                        <div class="form-group formheader">
                                                                            <input type="hidden" name="product_id"
                                                                                   value="<?php echo $product->id; ?>"/>
                                                                        </div>
                                                                        <div class="formcontainer">
                                                                            <span
                                                                                style="font-weight:700;padding-top:3px; text-align: left !important;">Available Product Size for Add </span>
                                                                            <div
                                                                                style="margin-bottom: 10px; margin-top: 15px">

                                                                                <?php
                                                                                $i = 0;
                                                                                foreach ($avail_size as $size) {
                                                                                $i++;
                                                                                ?>
                                                                                <span
                                                                                    style="border:1px solid #00c0ef33; min-width:100px; display:inline-block; margin:5px; padding:5px 2px;">
                                                                        <input type="checkbox"
                                                                               class="chksize clone_field"
                                                                               rel="size<?php echo $i ?>"
                                                                               name="size<?php echo $i ?>"
                                                                               value="<?php echo $size->prosize_name; ?>"
                                                                               style="width:39px !important;"/>
                                                                        <span rel="input_size<?php echo $i ?>"
                                                                              for="input_size<?php echo $i ?>"
                                                                              class="clone_field"><?php echo $size->prosize_name; ?></span></span>
                                                                                <?php } ?>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label>Quantity</label>
                                                                                <?php
                                                                                $i = 0;
                                                                                foreach ($avail_size as $size) {
                                                                                $i++;
                                                                                ?>
                                                                                <div class="form-group"
                                                                                     style="margin-bottom:0">
                                                                                    <label style="display:none"></label>
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <input type="text" size="6"
                                                                                                   rel="input_size<?php echo $i ?>"
                                                                                                   name="input_size<?php echo $i ?>"
                                                                                                   class="clone_field"
                                                                                                   id="required-input"
                                                                                                   style="display:none; margin-bottom:15px"
                                                                                                   placeholder="Qty for <?php echo $size->prosize_name; ?>"
                                                                                                   value=""/>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <input type="text" size="6"
                                                                                                   rel="barcode_input_size<?php echo $i ?>"
                                                                                                   name="barcode_input_size<?php echo $i ?>"
                                                                                                   class="clone_field"
                                                                                                   id="required-input"
                                                                                                   style="display:none; margin-bottom:15px"
                                                                                                   placeholder="Barcode for <?php echo $size->prosize_name; ?>"
                                                                                                   value=""/>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <?php } session(['numberofavailabesize' => $i]); ?>
                                                                            </div>
                                                                            <div class="col-md-12 mt-2">
                                                                                <label rel="txtcolorname"
                                                                                       for="txtcolorname"
                                                                                       class="clone_field">Color / Style
                                                                                    Name</label>
                                                                                <input type="text" rel="txtcolorname"
                                                                                       name="txtcolorname"
                                                                                       class="form-control txtfield clone_field"
                                                                                       required>
                                                                                <small style="color:#06be1c;">[ Example: Red, Green, Black Etc..]</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dynamic"></div>

                                                <div class="live-preview mt-3">
                                                    <div class="row align-items-center g-3">


                                                    <div class="col-md-4">
                                                        <label rel="file_colorthm" id="input-file" for="file_colorthm"
                                                               class="clone_field">Color Thumbnail</label>
                                                        <input id="input-file" type="file"
                                                               class="form-control clone_field file input-file form-control"
                                                               name="file_colorthm" data-browse-on-zone-click="true">
                                                        <small style="color:#06be1c;">[ Image Type: jpeg or jpg, Width:
                                                            81 px X Height: 62 px ]</small>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label rel="file_colorthm" id="input-file" for="file_colorthm"
                                                               class="clone_field">Image 1</label>
                                                        <input id="input-file" type="file"
                                                               class="form-control clone_field file input-file form-control"
                                                               name="file_im1" data-browse-on-zone-click="true">
                                                        <small style="color:#06be1c;">[ Image Type: jpeg or jpg, Width:
                                                            1600 px X Height: 2400 px ]</small>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label rel="file_colorthm" id="input-file" for="file_colorthm"
                                                               class="clone_field">Image 2</label>
                                                        <input id="input-file" type="file"
                                                               class="form-control clone_field file input-file form-control"
                                                               name="file_im2" data-browse-on-zone-click="true">
                                                        <small style="color:#06be1c;">[ Image Type: jpeg or jpg, Width:
                                                            1600 px X Height: 2400 px ]</small>
                                                    </div>
                                                    </div>
                                                    <div class="live-preview">
                                                        <div class="row align-items-center g-3">
                                                    <div class="col-md-4">
                                                        <label rel="file_colorthm" id="input-file" for="file_colorthm"
                                                               class="clone_field">Image 3</label>
                                                        <input id="input-file" type="file"
                                                               class="form-control clone_field file input-file form-control"
                                                               name="file_im3" data-browse-on-zone-click="true">
                                                        <small style="color:#06be1c;">[ Image Type: jpeg or jpg, Width:
                                                            1600 px X Height: 2400 px ]</small>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label rel="file_colorthm" id="input-file" for="file_colorthm"
                                                               class="clone_field">Image 4</label>
                                                        <input id="input-file" type="file"
                                                               class="form-control clone_field file input-file form-control"
                                                               name="file_im4" data-browse-on-zone-click="true">
                                                        <small style="color:#06be1c;">[ Image Type: jpeg or jpg, Width:
                                                            1600 px X Height: 2400 px ]</small>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label rel="file_colorthm" id="input-file" for="file_colorthm"
                                                               class="clone_field">Image 5</label>
                                                        <input id="input-file" type="file"
                                                               class="form-control clone_field file input-file form-control"
                                                               name="file_im5" data-browse-on-zone-click="true">
                                                        <small style="color:#06be1c;">[ Image Type: jpeg or jpg, Width:
                                                            1600 px X Height: 2400 px ]</small>
                                                    </div>

{{--                                                            <div class="col-md-3">--}}
{{--                                                                <label rel="file_colorthm" id="input-file" for="file_colorthm"--}}
{{--                                                                       class="clone_field">Image 5</label>--}}
{{--                                                                <input id="input-file" type="file"--}}
{{--                                                                       class="form-control clone_field file input-file form-control"--}}
{{--                                                                       name="file_im5" data-browse-on-zone-click="true">--}}
{{--                                                                <small style="color:#06be1c;">[ Image Type: jpeg or jpg, Width:--}}
{{--                                                                    1600 px X Height: 2400 px ]</small>--}}
{{--                                                            </div>--}}
                                                        </div>

                                                <div class="box-footer mt-3" style="float: right;">
                                                    <div class="col-sm-12" style="float: right;">
                                                        <button type="submit"
                                                                class="btn bg-dark btn-flat margin text-white"
                                                                style="float: right; margin-right: 10px">Add Album
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">&nbsp;</div>
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>


            <div class="row">
                <div class="col-lg-10 offset-1 ">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Color Album</h4>
                        </div><!-- end card header -->

                        @php
                            $albums = \App\Models\Productalbum::where('product_id', $product->id)->get();
                            $i=0;
                        @endphp
                        <div class="row mt-3 p-3">
                            <?php
                            $i = 0;
                            foreach ($albums as $product_album) {
                            $i++;
                            ?>

                            <div class="col-md-3 border-2">
                                <div class="card">
                                    <div class="card-body p-1"
                                         style="font-size: 18px; text-align: center; font-weight: bold">{{$product_album->productalbum_name}}</div>
                                    <img class="rounded-0"
                                         src="{{asset("pgallery/".$product_album->productalbum_img)}}"
                                         alt="Card image cap">
                                    <div class="card-body text-center">
                                        <button class="btn btn-primary btn-sm viewAlbum"
                                                id="{{$product_album->id}}">View Album
                                        </button>

                                        <input type="hidden" value="{{$product->id}}" id="pID">

                                        <a class="btn btn-sm btn-danger"
                                           onclick="return confirm('Are you sure you want to delete this album/Style?');"
                                           href='{{url("admin/product/album/delete?album_id=$product_album->id&serial=$i&product_id=$product_album->product_id")}}'>Delete
                                            Album</a>
                                    </div>

                                </div>
                            </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-10 offset-1 ">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Color Album Images</h4>
                        </div><!-- end card header -->
                        <table class="table align-middle table-nowrap" id="customerTable">
                            <thead class="table-light">
                            <tr>
                                <th class="text-dark">id</th>
                                <th class="text-dark">Image</th>
                                <th class="text-dark">order</th>
                                <th class="text-dark">Action</th>
                            </tr>
                            </thead>
                            <tbody class="list form-check-all" id="tr">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div><!-- End Page-content -->


    <style>
        small { font-size: 10px }
        label {
            font-weight: 700;
        }

        .form-check {
            margin-left: 20px;
        }

        .form-check label {
            font-weight: normal;
        }

        table {
            margin-bottom: 15px;
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
        }

        tr td input {
            width: 65px;
        }

        table tr td {
            padding: 7px 12px;
            font-size: 12px;
            border: 1px solid #e8e9eb;
        }

        table tr th {
            background: #000;
            color: #fff;
            border: 0 !important;
            padding: 7px 12px;
            font-size: 12px;
        }
    </style>
@stop

@push('js')

    <script>
        $(function () {
            $('.viewAlbum').click(function () {
                var albumId = this.id;
                var pID = $('#pID').val();
                $.ajax({
                    url: "{{url('admin/ajax/get-album') }}",
                    method: "GET",
                    data: {'albumId': albumId},
                    dataType: 'json',
                    success: function (response) {
                        var district_length = response.length;
                        for (var i = 0; i < district_length; i++) {

                            var i = i++;
                            var id = response[i]['id'];
                            var productimg_img_tiny = response[i]['productimg_img_tiny'];
                            var productimg_order = response[i]['productimg_order'];
                            var imgUrl = 'http://127.0.0.1:8000/pgallery/';

                            var url = '{{route('admin.product.image.edit',['imageId' => ':id','serial'=>':i','productId'=>':pID'])}}';
                            var delurl = '{{route('admin.product.image.delete',['imageId' => ':id','serial'=>':i','productId'=>':pID'])}}';
                            url = url.replace(':id', id);
                            url = url.replace(':i', i);
                            url = url.replace(':pID', pID);
                            delurl = delurl.replace(':id', id);
                            delurl = delurl.replace(':i', i);
                            delurl = delurl.replace(':pID', pID);
                            var img = '<img src="' + imgUrl + productimg_img_tiny + '" alt="Banner"/>';
                            tr += '<tr>' +
                                '<td>' + i + '</td>' +
                                '<td>' + img + '</td>' +
                                '<td>' + productimg_order + '</td>' +
                                '<td width="40%">' +
                                '<a class="btn btn-sm btn-flat btn-primary margin" href=' + url + '>Edit</a>' +
                                '<a class="btn btn-sm btn-flat btn-danger margin tdata" style="margin-left: 10px;" href=' + delurl + '>' +
                                'Delete</a>' +
                                '</td>' +
                                '</tr>';
                            $('#tr').empty();

                        }
                        $("#tr").append(tr);

                    },

                    error: function () {
                        console.log("There was an error while fetching images!");
                    },
                });
            });
        });

    </script>


    <script type="text/javascript">
        $(document).ready(function () {

            $("#fabric").change(function () {
                var fabric = $("#fabric").val();
                // alert(fabric)
                $(".loading-modal").show();
                // var url_op = base_url + "/admin/product/fabric/view?id=" + fabric;
                $.ajax({
                    url: "{{url('admin/ajax/get-fabric') }}",
                    method: "GET",
                    data: {'fabric': fabric},
                    dataType: 'json',

                    success: function (data) {
                        $(".loading-modal").hide();
                        // console.log(data.name);
                        $('#fabric_add').empty();
                        $('#fabric_add').val(data.name);
                        $('#care').val(data.care);

                    }
                });
            });


            $("#category").change(function () {
                var cat_id = $("#category").val();
                // alert(cat_id)
                $.ajax({
                    url: "{{url('admin/ajax/get-sub-category') }}",
                    method: "GET",
                    data: {'cat_id': cat_id},
                    dataType: 'json',

                    success: function (data) {
                        // alert(data);
                        // $('#CityList').html(html);
                        $('#subCat').empty();
                        $('#subCat').append('<option value="">Select Category</option>');
                        $.each(data, function (index, supproobj) {
                            $('#subCat').append('<option value="' + supproobj.id + '">' + supproobj.title + '</option>');
                        });
                    }
                });
            });
            $("#subCat").change(function () {
                var cat_id = $("#subCat").val();
                // alert(cat_id)
                $.ajax({
                    url: "{{url('admin/ajax/get-child-category') }}",
                    method: "GET",
                    data: {'cat_id': cat_id},
                    dataType: 'json',

                    success: function (data) {
                        // alert(data);
                        // $('#CityList').html(html);
                        $('#childCat').empty();
                        $('#childCat').append('<option value="">Select child Category</option>');
                        $.each(data, function (index, supproobj) {
                            $('#childCat').append('<option value="' + supproobj.id + '">' + supproobj.title + '</option>');
                        });
                    }
                });
            });
        });

        $(document).ready(
            function () {
                $(".chart").hide();
            });

        function valueChanged() {
            if ($('.chartChk').is(":checked"))
                $(".chart").show();
            else
                $(".chart").hide();
        }


        $(document).ready(
            function () {

                $('#isspecial').is(':checked');
                var grp = $('.clone_grp').clone(true);
                $('.add_style').click(function () {
                    add_grp();
                    return false;
                });
                add_grp();
                $('.remove_style').click(function () {

                    remove(this);
                    return false;
                });

                function chksize_click(obj) {
                    var input = $(obj).attr('name');
                    //alert('input[name=input_'+ input +']');
                    if ($(obj).is(':checked')) {
                        $('input[name=input_' + input + ']').show();
                        $('input[name=input_' + input + ']').addClass('form-control');
                        $('input[name=barcode_input_' + input + ']').show();
                        $('input[name=barcode_input_' + input + ']').addClass('form-control');
                    } else {
                        $('input[name=input_' + input + ']').hide();
                        $('input[name=input_' + input + ']').val("");
                        $('input[name=barcode_input_' + input + ']').hide();
                        $('input[name=barcode_input_' + input + ']').val("");
                    }

                }
                ;

                function add_grp(obj) {
                    $('.dynamic').append(grp.html());
                    grp_arng();
                    $('.remove_style').unbind("click");
                    $('.remove_style').bind("click", function () {
                        remove(this);
                        return false;
                    });
                    $('.chksize').unbind("change");
                    $('.chksize   ').bind("change", function () {
                        chksize_click(this);
                        return false;
                    });
                }//add add_subgrp
                function remove(obj) {
                    $(obj).parent().parent().parent().parent().fadeOut('slow',
                        function () {
                            $(obj).parent().parent().parent().parent().remove();
                            grp_arng();
                        }
                    );
                }//remove

                function grp_arng() {
                    var i = 0;
                    $('.product_style').each(function () {
                        i++;
                        $(this).find('.sl').html(i);
                        $(this).find('.clone_field').each(function () {
                            var name = $(this).attr('rel');
                            //alert($(this).attr('for'));

                            if ($(this).attr('for') == null) {
                                $(this).attr('name', name + '_' + i);
                            } else {
                                $(this).attr('for', name + '_' + i);
                            }
                        });
                    }); //each clone_field prod    uc    t_st    yle
                    $('.total_grp').attr('value', i);
                }//grp_arng
                $('.clone_grp').remove();
                grp_arng();
                $(".input-file").fileinput({
                    showUpload: false,
                    dropZoneEnabled: false,
                    maxFileCount: 10,
                    inputGroupClass: "input-group-md"
                });
            });
    </script>
@endpush

