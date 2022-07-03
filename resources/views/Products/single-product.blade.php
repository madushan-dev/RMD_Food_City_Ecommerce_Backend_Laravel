@php
    $title = 'Product - '.$product->id;
@endphp
@extends('layouts.app',['title' => $title])

@section('content')
<!DOCTYPE html>
<html lang="en">
    <body class="fixed-left">
        <!-- Loader -->
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Start right Content here -->
            <div class="content-page width-red ml-0">
                <!-- Start content -->
                <div class="content">
                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                
                                                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                                <li class="breadcrumb-item active">{{ $title }}</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Product Details</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <div class="col-md-12 col-xl-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">

                                            @if (session('success'))
                                            <div class="alert bg-success text-center text-white">
                                                {{ session('success') }}
        
        
                                            </div>
                                               
                                            @endif

                                            @if ($errors->any())
                                            <div class="alert bg-danger text-white">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif



                                        <form action="{{ route('products')}}/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="general-label">
                                                    <div class="row">
                                                        
                                                        <div class="form-group mb-2 col-6">
                                                            <h4 class="header-title mt-0 pb-2">Category</h4>
                                                        
                                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="category_id">
                                                                @php
                                                                $selected = $product->categories->id;
                                                                 @endphp
    
                                                                 @foreach ($categories as $category)
                                                                 <option value="{{ $category->id }}"
                                                                 @if ($selected == $category->id)
                                                                     {{ 'selected' }}
                                                               @endif
                                                                >{{ $category->name }}</option>
    
                                                           
                                                            @endforeach
                                                        </select>                      
                                           
                                                        </div>
                                                        <div class="form-group mb-2 col-6">
                                                            <h4 class="header-title mt-0 pb-2  ">Brand</h4>
                                                        
                                                            
                                                            <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="brand_id">
                                                                @php
                                                                $selected = $product->brands->id;
                                                                 @endphp
    
                                                                 @foreach ($brands as $brand)
                                                                 <option value="{{ $brand->id }}"
                                                                 @if ($selected == $brand->id)
                                                                     {{ 'selected' }}
                                                               @endif
                                                                >{{ $brand->name }}</option>
    
                                                           
                                                            @endforeach
                                                        </select> 
                                                        </div>
                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group mb-2 col-6">
                                                            <h4 class="header-title mt-0 pb-2">Product Name</h4>
                                                        
                                                            <input type="text" name="name" id="" class="form-control mb-3 product-status-form" placeholder="Enter Product Name" value="{{ $product->name }}">
                                                        </div>
                                                        <div class="form-group mb-2 col-6">
                                                            <h4 class="header-title mt-0 pb-2">Cost Price (Rs)</h4>
                                                        
                                                            <input type="text" name="cost_price" id="" class="form-control mb-3 product-status-form" placeholder="Enter Cost Price" value="{{ $product->cost_price }}">
                                                        </div>
                                                       
                                             
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group mb-2 col-6">
                                                            <h4 class="header-title mt-0 pb-2">Selling Price</h4>
                                                        
                                                            <input type="text" name="selling_price" id="" class="form-control mb-3 product-status-form" placeholder="Enter Selling Price" value="{{ $product->selling_price }}">
                                                        </div>
                              
                                                        <div class="form-group mb-2 col-6">
                                                            <h4 class="header-title mt-0 pb-2">Stock Count</h4>
                                                        
                                                            <input type="text" name="count" id="" class="form-control mb-3 product-status-form" placeholder="Product Stock" value="{{ $product->count }}">
                                                        </div>
                                       
                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group mb-2 col-6">
                                                            <h4 class="header-title mt-0 pb-2">Description</h4>
                                                            <textarea name="description" id="" cols="70" rows="10">
                                                              {{ $product->description }}
                                                            </textarea>
                                                        </div>
                                                        <div class="form-group mb-2 col-6">
                                                            <h4 class="header-title mt-0 pb-2">Product Image</h4>
                                                           <input type="file" src="" alt="" class="" name="image" value='{{ $product->product_image }}'>
                                                        </div>
                                             
                                                        
                                                    </div>
    
                                                </div>

                                            <div class="row">
                                                
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-raised mb-0 w-100 mt-3">Submit</button>

                                     
                                        </form>
                                        </div>         
                                    </div>
                                </div> <!-- end col -->
                                                                                                                                         
                            </div> <!-- end row -->
                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->
            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->
    </body>
</html>

@endsection