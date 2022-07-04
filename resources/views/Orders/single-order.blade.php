@php
    $title = 'Order Number - '.$order->id;
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
                                        <h4 class="page-title">Order Details</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
                     
                            
                 
                          
                            <div class="row">
                                <div class="col-md-12 col-xl-8 ">
                                    <div class="card m-b-30 pb-5">
                                 
                                        <div class="card-body pl-5">

                                       
                                            <div class="invoice-header">
                                                <div>
                                                    <img src="/images/rmd-logo.png" alt="" class="invoice-logo">
                                                </div>
                                                <div>
                                                    <h5 class="invoice-heading text-center mb-4">SALES INVOICE</h5>
                                                    <div class="only-print">
        
                                                        <h6 class="text-center">RMD Food City </h6>
                                                        <h6 class="text-center">305 Gonagala - Passara Rd, Hindagoda</h6>
                                                        <h6 class="text-center"> 071 557 2723</h6>
        
                                                    </div>
                                                

                                                </div>
                                     

                                            </div>

                                  




                                       
                                            <div class="general-label">

                                                <div class="order-customer row bg-success py-3 mr-1">
                                                   
                                                    <div class="col-md-4 col-xl-4 d-flex align-items-center justify-content-center invoice-profile-image">
                                                  
                                                        
                                                        <img src="/images/users/user.png" alt="" width="80%">
                                                    </div>

                                                    <div class="col-md-8 col-xl-8 d-flex flex-column justify-content-center align-items-start pt-3 text-white">

                                                        <p class="order-userdetails">Order Id - {{ $order->id }}</p>
                                                        <p class="order-userdetails">Order Date - {{ dateWithoutSeconds($order->date) }}</p>
                                                       <p class="order-userdetails">Delivery Name - {{ $order->delivery_name}} </p>
                                                       <p class="order-userdetails">Delivery Address - {{ $order->delivery_address }}</p>
                                                       
                                                       <p class="order-userdetails"> Delivery Phone - {{ $order->delivery_phone }}</p>  
                                                       <p class="order-userdetails"> Payment Type  - {{ $order->payment_type }}</p>  
                                                        
                                                       
                                                    </div>
                                                </div>




                                                <div class="order-product-list mt-3 pt-3">
                                                <h6 class="mb-2">Products List</h6>  

                                                <table class="table mb-0">
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Product Name</th>
                                                        <th scope="col" class="text-right">Unit Price</th>
                                                        <th scope="col" class="text-right">Quantity</th>
                                                        <th scope="col" class="text-right">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    
                                                                                                
                                                        @foreach ($products as $product)
                                                        
                                                        <tr>
                                                            <th scope="row">{{ ++$loop->index }}</th>
                                                            <td>{{ $product->name }}</td>
                                                            <td class="text-right">{{ formatCurrency($product->selling_price) }}</td>
                                                            <td class="text-right">{{ $product->quantity }}</td>
                                                            <td class="text-right">{{ formatCurrency($product->selling_price * $product->quantity) }}</td>
                                                        </tr>
                                                        @endforeach
                                                  
                                                    
                                                    </tbody>
                                                </table>   
                                               
                                                <h4 class="text-center pt-3">{{ formatCurrency($order->payment_amount) }}</h4>
                                                                                                   
                                                  
                                                  
                                            </div>
                                            </div>
                                            
                                        </div>
                                        
                                   
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-12 col-xl-4">
                                    <div class="card m-b-30">
                                 
                                     
                                        <div class="card-body">
                                        <form action="{{ route('orders')}}/{{ $order->id }}" method="POST">
                                                @csrf
                                       
                                            <div class="general-label">
                                                   
                                                    <div class="form-group mb-3 invoice-order-status">
                                                        <h4 class="header-title mt-0 pb-2">Order Status</h4>
                                                       
                                               
                                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="status">
                                                            
                                                         
                                                                @php
                                                                    $selected = $order->status;
                                                                    
                                                                @endphp
                                                                

                                                                <option value="Processing"
                                                                    @if ($selected == 'Processing')
                                                                        {{ 'selected' }}
                                                                  @endif
                                                                >Processing</option>
                                                                <option value="On Delivery"
                                                                    @if ($selected == 'On Delivery')
                                                                        {{ 'selected' }}
                                                                    @endif
                                                            >On Delivery</option>
                                                                <option value="Completed"
                                                                    @if ($selected == 'Completed')
                                                                     {{ 'selected' }}
                                                                    @endif
                                                                >Completed</option>
                                                                <option value="Cancelled"
                                                                    @if ($selected == 'Cancelled')
                                                                 
                                                                      {{ 'selected' }}
                                                                    @endif
                                                                >Cancelled</option>
                                                            
                                                          
                                                        </select>       
                                                    </div>   <div class="form-group mb-3">
                                                        <h4 class="header-title mt-0 pb-2">Delivery Details</h4>
                                                       
                                                        <input type="text" name="delivery_company" id="" class="form-control mb-3 order-status-form" placeholder="Delivery Company" value="{{ $order->delivery_company }}">

                                                        <input type="text" name="tracking_number" id="" class="form-control order-status-form" placeholder="Tracking Code"  value="{{ $order->tracking_number }}">
                                                    </div>
                                                    
                                                  
                                             
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-raised mb-0 w-100 invoice-hide">Submit</button>
                                        </form>

                                        <form action="{{ route('orders')}}/{{ $order->id }}" method="POST" class="invoice-hide">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-raised mb-0 w-100">Delete</button>
                                        </form>

                                        <button class="btn btn-primary invoice-hide" onclick="window.print()">Print Invoice</button>



                                        @if (session('success'))
                                        <div class="alert bg-success text-center text-white">
                                            {{ session('success') }}
    
    
                                        </div>
                                           
                                        @endif

                                        @if ($errors->any())
                                            <div class="alert bg-danger text-center text-white">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                                    
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