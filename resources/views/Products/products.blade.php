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
                                            @if (session('success'))
                                            <div class="alert bg-success text-center text-white">
                                                {{ session('success') }}
        
        
                                            </div>
                                               
                                            @endif         
                                                      
                                            <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                                                <thead>
                                                    <tr>
                                                        <th>Product Id</th>
                                                        <th>Product Name</th>
                                                        <th>Cost Price</th>
                                                        <th>Selling Price</th>
                                                        <th>Stock Count</th>
                                                        <th>Category</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                         
                                                <tbody>
                                                    
                                                    @foreach ($products as $product )
                                                    <tr>
                                                        <td>{{ $product->id }}
                                                      
                                                        
                                                        </td>
                                                        <td>
                                                            <img src="images/products/{{ $product->product_image }}" alt="" class="product-image">
                                                            {{ $product->name }}</td>
                                                        <td>{{ "Rs ". $product->cost_price . ".00 " }}</td>
                                                        <td>{{"Rs ". $product->selling_price. ".00 " }}</td>
                                                        <td>{{ $product->count }}</td>
                                                        <td>{{ $product->categories->name  }}</td>
                                                        <td class="text-right d-flex align-items-center">

                                                        <a href="{{ route('products') ."/". $product->id }}" type="button" class="btn btn-raised btn-primary px-3 py-0 mr-1" style="height:100%">
                                                            Edit 
                                                        </a>

                                                        <form action="{{ route('products') ."/". $product->id }}" method="POST" class="m-0">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-raised btn-danger  px-3 py-0  show_confirm " title='Delete'>
                                                                Delete </button>
                                                        </form>
                                                        </td>
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

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <script type="text/javascript">
 
        $('.show_confirm').click(function(event) {
            console.log('clicked');
             var form =  $(this).closest("form");
             var name = $(this).data("name");
             event.preventDefault();
             swal({
                 title: `Do you want to delete this record?`,
                 icon: "warning",
                 buttons: true,
                 dangerMode: true,
             })
             .then((willDelete) => {
               if (willDelete) {
                 form.submit();
               }
             });
         });
     
   </script>
</html>

@endsection