@extends('back.layouts.app')
@section('title','Role Permission')

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

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Role & Permission Edit</h4>
                    </div><!-- end card header -->

                    <div class="card-body">
    <form action="{{route('admin.role.update')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$role->id}}" class="form-control" required />
        <div class="card-body">
            <!-- Minimal style -->
            <div class="row">
                    <div class="col-sm-12">
                        @if (session('save'))
                            <div class="alert alert-success">
                          <h5><i class="fas fa-info"></i> Note:</h5>
                          {{ session('save') }}
                        </div>
                        @endif
                        @if (session('error'))
                                <div class="alert alert-danger">
                          <h5><i class="fas fa-info"></i> Note:</h5>
                          {{ session('error') }}
                        </div>
                        @endif
                        <div class="form-group">
                            <label>Role Name</label>
                            <input type="text" name="role_name" value="{{$role->role_name}}" class="form-control" required />
                            <span class="text-danger">{{ $errors->first('role_name') }}</span>
                        </div>
                    </div>
            </div>
            <div class="row"  style="margin-top: 20px;">
                  <div class="col-sm-3">
                      <div class="user_access pb-3">
                         <h5 class="pb-2">Dashboard</h5>
                        <!-- checkbox -->
                        <div class="form-group clearfix">
                          <div class="icheck-primary">
                            <input type="checkbox" id="Dashboard" name="permission[]" value="admin" calss="checkBoxClass" @if(in_array('admin',$permission)) checked @endif />
                            <label for="Dashboard">
                                Dashboard
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="user_access">
                         <h5 class="pb-2">Home Page</h5>
                        <!-- checkbox -->
                        <div class="form-group clearfix">
                          <div class="icheck-primary">
                            <input type="checkbox" id="homepage_manage" name="permission[]" value="homepage" calss="checkBoxClass" @if(in_array('homepage',$permission)) checked @endif />
                            <label for="homepage_manage">
                                Manage Homepage
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="user_access">
                         <h5 class="pb-2">Category</h5>
                        <!-- checkbox -->
                        <div class="form-group clearfix">
                          <div class="icheck-primary">
                            <input type="checkbox" id="category_manage" name="permission[]" value="category" calss="checkBoxClass" @if(in_array('category',$permission)) checked @endif />
                            <label for="category_manage">
                                Manage Category
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="user_access">
                         <h5 class="pb-2">Product</h5>
                        <!-- checkbox -->
                        <div class="form-group clearfix">
                          <div class="icheck-primary">
                            <input type="checkbox" id="product_manage" name="permission[]" value="product" calss="checkBoxClass" @if(in_array('product',$permission)) checked @endif />
                            <label for="product_manage">
                                Manage Product
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="user_access">
                         <h5 class="pb-2">Order</h5>
                        <!-- checkbox -->
                        <div class="form-group clearfix">
                          <div class="icheck-primary">
                            <input type="checkbox" id="order_manage" name="permission[]" value="order" calss="checkBoxClass" @if(in_array('order',$permission)) checked @endif />
                            <label for="order_manage">
                                Manage Order
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="user_access">
                         <h5 class="pb-2">Customers</h5>
                        <!-- checkbox -->
                        <div class="form-group clearfix">
                          <div class="icheck-primary">
                            <input type="checkbox" id="customer_manage" name="permission[]" value="customer" calss="checkBoxClass" @if(in_array('customer',$permission)) checked @endif />
                            <label for="customer_manage">
                                Manage Customers
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="user_access">
                         <h5 class="pb-2">Marketing</h5>
                        <!-- checkbox -->
                        <div class="form-group clearfix">
                          <div class="icheck-primary">
                            <input type="checkbox" id="marketing_manage" name="permission[]" value="marketing" calss="checkBoxClass" @if(in_array('marketing',$permission)) checked @endif />
                            <label for="marketing_manage">
                                Manage Marketing
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-sm-3">
                      <div class="user_access">
                         <h5 class="pb-2">Admin User</h5>
                        <!-- checkbox -->
                        <div class="form-group clearfix">
                          <div class="icheck-primary">
                            <input type="checkbox" id="admin_manage" name="permission[]" value="admin/user" calss="checkBoxClass" @if(in_array('admin/user',$permission)) checked @endif />
                            <label for="admin_manage">
                                Manage Admin
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
          <!-- /.card-body -->
        </div>
         <div class="card-footer">
            <button type="submit" name="btnsubmit" class="submitbtn btn btn-primary float-right"> <i class="fas fa-save"></i> Update Role</button>
         </div>
     </form>
                    </div>
                </div>
            </div>
        </div>


        <style>
            label:not(.form-check-label):not(.custom-file-label) {
                font-weight: 700;
            }

            .pb-2, .py-2 {
                padding-bottom: 0.5rem!important;
            }

            .checkBoxClass {
                margin-left: 15px;
            }
        </style>

    </div>
</div>
<script>
$(document).ready(function() {
    $("#input-file").fileinput({
        showUpload: false,
        dropZoneEnabled: true,
        maxFileCount: 10,
        inputGroupClass: "input-group-md"
    });
});
</script>
@endsection
