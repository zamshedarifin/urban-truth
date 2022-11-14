@extends('back.layouts.app')
@section('title','Product Add')
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
                                <li class="breadcrumb-item active">Add Product</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->
            <form action="{{route('admin.product.save')}}" enctype="multipart/form-data" method="post"> @csrf
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
                                                <input  class="form-control" type="text" id="required-input" name="txtstyleref" value="{{old('txtstyleref')}}" id="txtstyleref" required>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div>
                                                <label for="txtproductname" class="form-label">Product Title</label>
                                                <input type="text" class="form-control" type="text" name="txtproductname" id="txtproductname" value="{{ old('txtproductname') }}" required>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div>
                                                <label for="labelInput" class="form-label">Fabric Composition</label>
                                                <a class="btn btn-primary btn-sm"  data-bs-toggle="modal" id="create-btn" data-bs-target="#fabricModal"  href="#">
                                                    <i class="ri-add-box-fill"></i>
                                                </a>

                                                <select class="form-control  @error('category') is-invalid @enderror"
                                                        id="fabric">
                                                    <option value="" disabled selected>Select category</option>
                                                    @foreach($fabrics as $fabric)
                                                        <option value="{{$fabric->id}}"
                                                                @if(old('fabric') == $fabric->id ) selected @endif>{{$fabric->name}}</option>
                                                    @endforeach
                                                </select>
                                                <input type="hidden" name="fabric" id="fabric_add" />
                                            </div>
                                        </div>
                                        <!--end col-->


                                        <div class="col-md-4">
                                            <div>
                                                <label for="category" class="form-label">Parent Category</label>
                                                <select class="form-control  @error('category') is-invalid @enderror" name="category"
                                                        id="category">
                                                    <option value="" disabled selected>Select category</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}"
                                                                @if(old('category') == $category->id ) selected @endif>{{$category->title}}</option>
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
                                                <select class="form-control  @error('sub_category') is-invalid @enderror"
                                                        name="sub_category" id="subCat">
                                                    <option value="" disabled selected>Select sub category</option>
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
                                                <select class="form-control  @error('child_category') is-invalid @enderror"
                                                        name="child_category" id="childCat">
                                                    <option value="" disabled selected>Select child category</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->


                                        <div class="col-md-4">
                                            <div>
                                                <label for="in-range-input" class="form-label">Price</label>
                                                <input  class="form-control" type="number"  name="txtprice" id="in-range-input" min="1" max="20000" value="{{old('txtprice')}}" required>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div>
                                                <label for="discount" class="form-label">Discount</label>
                                                <input class="form-control" type="number" name="txtpricediscounted" id="discount" min="0" max="200" value="{{old('txtpricediscounted')}}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-4">
                                            <div>
                                                <label for="pOrder" class="form-label">Product Order</label>
                                                <input  class="form-control" type="number" name="txtorder" id="pOrder" min="1" max="1000"  value="{{$total_product + 1}}" readonly>
                                            </div>
                                        </div>
                                        <!--end col-->


                                        <div class="col-md-4">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Collection</label>
                                                @foreach($campaigns as $campaign)
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" type="checkbox" id="campaign{{$campaign->id}}" value="{{$campaign->id}}" name="campaign">
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
                                                <label for="placeholderInput" class="form-label">Care Description</label>
                                                <textarea class="form-control" type="text" name="txtproductcare" id="care"
                                                          id="optional-input" rows="5" readonly>{{old('txtproductcare')}}</textarea>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-md-12">
                                            <div>
                                                <label for="placeholderInput" class="form-label">Product
                                                    Description</label>
                                                <textarea class="ckeditor-classic" id="ckeditor-classic" type="text" name="txtproductdetails" >{{old('txtproductdetails')}}</textarea>
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

                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="flex-shrink-0">
                    <div class="form-check">

                        <input type="hidden" name="total_grp" id="myform" class="total_grp" value="">
                        <input type="hidden" name="blank" id="blank" value="">
                    </div>
                </div>

                <div class="clone_grp">
                    <div class="product_style" style="margin-top: 20px">
                        <div class="row">
                            <div class="col-lg-10 offset-1 ">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">File Input</h4>

                                        <div class="flex-shrink-0">
                                            <div class="form-check">
                                                <a type="button"
                                                   class="remove_style submitbtn btn btn-sm btn-danger pull-right"><i
                                                        class="ri-close-fill"></i></a>
                                            </div>
                                        </div>

                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <div>
                                            <span for="blank" style="display:none;">Available Product Size</span><span
                                                style="font-weight:700;padding-top:3px;">Available Product Size for Add </span></br>
                                            <?php
                                            $i = 0;
                                            foreach ($avail_size as $size) {
                                            $i++;
                                            ?>
                                            <span
                                                style="border:1px solid #00c0ef33; min-width:100px; display:inline-block; margin:5px; padding:5px 2px;"><input
                                                    type="checkbox" class="chksize clone_field" rel="size{{$i}}"
                                                    name="size{{$i}}" value="{{$size->prosize_name}}"
                                                    style="width:39px !important;"/> <span rel="input_size{{$i}}"
                                                                                           for="input_size{{$i}}"
                                                                                           class="clone_field">{{$size->prosize_name}}</span></span>
                                            <?php } ?>
                                        </div>
                                        <div class="form-group mt-3 mb-3">
                                            <label>Quantity</label>
                                            <?php
                                            $i = 0;
                                            foreach ($avail_size as $size) {
                                            $i++;
                                            ?>
                                            <div class="form-group" style="margin-bottom:0">
                                                <label style="display:none"></label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="text" size="6" rel="input_size{{$i}}"
                                                               name="input_size{{$i}}" class="clone_field"
                                                               id="required-input"
                                                               style="display:none; margin-bottom:15px"
                                                               placeholder="Qty for {{ $size->prosize_name}}"
                                                               value=""/>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <input type="text" size="6" rel="barcode_input_size{{$i}}"
                                                               name="input_barcode{{$i}}" class="clone_field"
                                                               id="required-input"
                                                               style="display:none; margin-bottom:15px"
                                                               placeholder="Barcode for {{$size->prosize_name}}"
                                                               value=""/>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } session(['numberofavailabesize' => $i]); ?>
                                        </div>


                                        <div class="live-preview">
                                            <div class="row align-items-center g-3">
                                                <div class="col-lg-3">
                                                    <div>
                                                        <label for="formFile" class="form-label">Color / Style Name
                                                            Example</label>
                                                        <input type="text" rel="txtcolorname" name="txtcolorname" class="form-control txtfield clone_field " required>
                                                        <small style="color:#06be1c; font-size: 10px">[Example: red, green, black.]</small>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3">
                                                    <div>
                                                        <label for="formFileMultiple" class="form-label">Color Thumbnail</label>
                                                      <input id="input-file" rel="file_colorthm" type="file" class="clone_field file input-file form-control" name="file_colorthm">
                                                    <!--<input style="width:100%" type="file" rel="file_colorthm" name="file_colorthm" class="btn btn-primary clone_field" required>-->
                                                    <small style="color:#06be1c; font-size: 10px">[ Image Type: jpeg or jpg, Width: 81 Px Height: 62 PX ]</small>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3">
                                                    <div>
                                                        <label for="formFileDisabled" class="form-label">Image 1</label>
                                                        <input style="width:100%" type="file" rel="file_im1" name="file_im2" class="clone_field file input-file form-control" required>
                                                    <small style="color:#06be1c; font-size: 10px">[ Image Type: jpeg or jpg, Width: 1300 px X Height: 1677 px ]</small>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3">
                                                    <div>
                                                        <label for="formFileDisabled" class="form-label">Image 2</label>
                                                      <input style="width:100%" type="file" rel="file_im2" name="file_im2" class="clone_field file input-file form-control">
                                                        <small style="color:#06be1c; font-size: 10px">[ Optional Image]</small>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                            <div class="row mt-4 align-items-center g-3">

                                                <div class="col-lg-3">
                                                    <div>
                                                        <label for="formSizeDefault" class="form-label">Image 3</label>
                                                        <input style="width:100%" type="file" rel="file_im3" name="file_im3" class="clone_field file input-file form-control">
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div>
                                                        <label for="formSizeDefault" class="form-label">Image 4</label>
                                                        <input style="width:100%" type="file" rel="file_im4" name="file_im4" class="clone_field file input-file form-control">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3">
                                                    <div>
                                                        <label for="formSizeDefault" class="form-label">Image 5</label>
                                                        <input style="width:100%" type="file" rel="file_im5" name="file_im5" class="clone_field file input-file form-control">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-3">
                                                    <div>
                                                        <label for="formSizeDefault" class="form-label">Image 6</label>
                                                        <input style="width:100%" type="file" rel="file_im6" name="file_im6" class="clone_field file input-file form-control">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
                <div class="dynamic"></div>
                <div class="row g-3">
                    <div class="col-md-2 offset-9">
                        <div class="card">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </div>
                </div>
            </form>
        </div> <!-- container-fluid -->
    </div><!-- End Page-content -->
    @include('back.include.modal')

    <div class="wsk-float">
        <a class="add_style submitbtn btn btn-sm btn-primary pulse-button" href="#">Add New Style</a>
{{--        <a href="#" target="_blank" class="">--}}
{{--        </a>--}}
    </div>

    <style>
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


        .wsk-float {
            position: fixed;
            bottom: 120px;
            right: 40px;
        }
        .wsk-float a,
        .wsk-float a img {
            display: block;
            padding: 9px;
        }

        .pulse-button {
            position: relative;
            width: 100px;
            height: 33px;
            border: none;
            box-shadow: 0 0 0 0 rgba(41, 167, 26, 0.7);
            border-radius: 8%;
            background-color: #405189;
            /*background-image: url(http://pngimg.com/uploads/whatsapp/whatsapp_PNG4.png);*/
            background-size: cover;
            background-repeat: no-repeat;
            cursor: pointer;
            -webkit-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
            -moz-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
            -ms-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
            animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
        }
        .pulse-button:hover {
            -webkit-animation: none;
            -moz-animation: none;
            -ms-animation: none;
            animation: none;
        }

        @-webkit-keyframes pulse {
            to {
                box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);
            }
        }
        @-moz-keyframes pulse {
            to {
                box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);
            }
        }
        @-ms-keyframes pulse {
            to {
                box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);
            }
        }
        @keyframes pulse {
            to {
                box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);
            }
        }

    </style>
@stop

@push('js')
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
