@php
    $title = 'Receiving Number - '.$receiving->id;
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
                                        <h4 class="page-title">Receiving Details</h4>
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
                                                    <h5 class="invoice-heading text-center mb-4">RECEIVINGS INVOICE</h5>
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

                                                        <p class="order-userdetails">Receiving Id - {{ $receiving->id }}</p>
                                                        <p class="order-userdetails">Receiving Date - {{ dateWithoutSeconds($receiving->date) }}</p>
                                                       <p class="order-userdetails">Supplier Name - {{ $receiving->suppliers->company}} </p>
                                                       <p class="order-userdetails">Supplier Address - {{ $receiving->suppliers->address }}</p>
                                                       <p class="order-userdetails"> Supplier Phone - {{ $receiving->suppliers->phone }}</p>  
                                                      
                                                       
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
                                                    
                                                        @php
                                                            $total_payment = 0;
                                                        @endphp   

                                                        @foreach ($products as $product)
                                                        
                                                        <tr>
                                                            <th scope="row">{{ ++$loop->index }}</th>
                                                            <td>{{ $product->name }}</td>
                                                            <td class="text-right">{{ formatCurrency($product->cost_price) }}</td>
                                                            <td class="text-right">{{ $product->quantity }}</td>

                                                            <td class="text-right">{{ formatCurrency($product->cost_price * $product->quantity) }}</td>

                                                            @php
                                                            $total_payment += $product->cost_price * $product->quantity;
                                                             @endphp




                                                        </tr>
                                                        @endforeach
                                                  
                                                    
                                                    </tbody>
                                                </table>   
                                               
                                                <h4 class="text-center pt-3">Total Payment : {{ formatCurrency($total_payment) }}</h4>
                                                                                                   
                                                  
                                                  
                                            </div>
                                            </div>
                                            
                                        </div>
                                        
                                   
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-12 col-xl-4 ">
                                    <button class="btn btn-primary invoice-hide" onclick="window.print()">Print Invoice</button>
                                </div>
               
                                                                                                                                         
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