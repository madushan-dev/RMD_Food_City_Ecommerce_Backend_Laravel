@extends('layouts.app',['title' => 'Products'])

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
                                                <li class="breadcrumb-item active">All Products</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">All Products</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->         
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">            
                                                      
                                            <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                                                <thead>
                                                    <tr>
                                                        <th>Product Id</th>
                                                        <th>Product Name</th>
                                                        <th>Cost Price</th>
                                                        <th>Selling Price</th>
                                                        <th>Stock Count</th>
                                                        <th>Category</th>
                                                    </tr>
                                                </thead>
                                         
                                                <tbody>
                                                    
                                                    @foreach ($products as $product )
                                                    <tr>
                                                        <th>{{ $product->id }}</th>
                                                        <th>{{ $product->name }}</th>
                                                        <th>{{ $product->cost_price }}</th>
                                                        <th>{{ $product->selling_price }}</th>
                                                        <th>{{ $product->count }}</th>
                                                        <td>{{ $product->categories->name  }}</td>
                                                    </tr>
                                                    @endforeach
                                                <tbody>
                                            </table>            
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