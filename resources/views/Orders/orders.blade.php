@extends('layouts.app',['title' => 'Orders'])

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
                                                <li class="breadcrumb-item active">All Orders</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">All Orders</h4>
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
                                                    <th>Order Id</th>
                                                    <th>Customer</th>
                                                    <th>Date</th>
                                                    <th>Payment</th>
                                                    <th>Type</th>
                                                    <th>Status</th>
                                                    <th class="text-right">Action</th>
                                                </tr>
                                                </thead>
                                         
                                                <tbody>
                                                    @foreach ($orders as $order )
                                                  
                                                    <tr>
                                                        <td>{{ $order->id }}</td>

                                                    
                                                        <td>{{ $order->customers->first_name ." " . $order->customers->last_name  }}</td>
                                              
                                                      


                                                        <td>{{ $order->date }}</td>
                                                        <td class="text-right">Rs. {{ $order->payment_amount }}</td>
                                                        <td class="text-right">{{ $order->payment_type }}</td>
                                                        <td><span class="badge badge-pill badge-warning p-2 text-center w-100"> {{ $order->status }}</span></td>
                                                        <td class="text-right d-flex align-items-center"><a href="{{ route('orders') ."/". $order->id }}" type="button" class="btn btn-raised btn-primary px-3 py-0 mr-1" style="height:100%">
                                                            View </a>
                                                        <form action="{{ route('orders')}}/{{ $order->id }}" method="POST" class="m-0">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-raised btn-danger  px-3 py-0">
                                                                    Delete </button>
                                                            </form>
                                                </tr>
                                                         </td>

                                                          
                                                        
                                                    @endforeach
                                               
                                       
                                                </tbody>
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