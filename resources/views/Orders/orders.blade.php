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
                                            @if (session('success'))
                                            <div class="alert bg-success text-center text-white">
                                                {{ session('success') }}
        
        
                                            </div>
                                               
                                            @endif         
                                                      
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
                                              
                                                      


                                                        <td>{{ dateWithoutSeconds($order->date)}}</td>
                                                        <td class="text-right">{{ formatCurrency($order->payment_amount) }}</td>
                                                        <td class="text-right">{{ $order->payment_type }}</td>
                                                        <td>
                                                            @php
                                                                if($order->status == "Processing"){
                                                                    $status ="badge-warning";

                                                                }elseif ($order->status == "Cancelled"){
                                                                    $status ="badge-danger";

                                                                }elseif ($order->status == "On Delivery"){
                                                                    $status ="badge-info";
                                                                }else{
                                                                    $status ="badge-success";
                                                                }
                                                            @endphp
                                                           
                                                           
                                                            <span class="badge badge-pill {{ $status }} p-2 " style="min-width:80px">
                                                                
                                                                
                                                                {{ $order->status }}
                                                            
                                                            
                                                            </span>
                                                        </td>










                                                        <td class="text-right d-flex align-items-center"><a href="{{ route('orders') ."/". $order->id }}" type="button" class="btn btn-raised btn-primary px-3 py-0 mr-1" style="height:100%">
                                                            View </a>
                                                        <form action="{{ route('orders')}}/{{ $order->id }}" method="POST" class="m-0">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-raised btn-danger  px-3 py-0  show_confirm " title='Delete'>
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