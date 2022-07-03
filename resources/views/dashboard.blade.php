@extends('layouts.app',['title' => 'Dashboard'])

@section('content')

  
        <!-- Begin page -->
        <div id="wrapper">
                     <div class="page-content-wrapper dashborad-v">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                
                                               
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Dashboard</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col-sm-12 col-md-6 col-xl-3">
                                    <div class="card bg-danger m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex row">
                                                <div class="col-3 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-google-physical-web"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ml-auto align-self-center text-center">
                                                    <div class="m-l-10 text-white float-right">
                                                        <h5 class="mt-0 round-inner">{{ $total_orders }}</h5>
                                                        <p class="mb-0 ">Total Orders</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                    <div class="card bg-info m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex row">
                                                <div class="col-3 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-account-multiple-plus"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 text-center ml-auto align-self-center">
                                                    <div class="m-l-10 text-white float-right">
                                                        <h5 class="mt-0 round-inner">{{ $total_customers }}</h5>
                                                        <p class="mb-0 ">Total Customers</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                    <div class="card bg-success m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex row">
                                                <div class="col-3 align-self-center">
                                                    <div class="round ">
                                                        <i class="mdi mdi-basket"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ml-auto align-self-center text-center">
                                                    <div class="m-l-10 text-white float-right">
                                                  
                                                        <h5 class="mt-0 round-inner">Rs. {{ $total_revenue }}.00</h5>
                                                        <p class="mb-0 ">Monthly Revenue</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                    <div class="card bg-primary m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex row">
                                                <div class="col-3 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-calculator"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 ml-auto align-self-center text-center">
                                                    <div class="m-l-10 text-white float-right">
                                              
                                                        <h5 class="mt-0 round-inner">Rs. {{ $total_profit }}.00</h5>
                                                        <p class="mb-0">Total Profit</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>

               

                            <div class="row">
                                <div class="col-md-12 col-xl-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h5 class="header-title mb-3 mt-0">Recent Orders</h5>
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="border-top-0">#</th>
                                                            <th class="border-top-0">Date</th>
                                                            <th class="border-top-0">Customer</th>
                                                            <th class="border-top-0">Amount</th>
                                                            <th class="border-top-0">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($order_list as $order)
                                                            
                                                   
                                                        <tr>
                                                            <td>
                                                                {{ $loop->iteration }}
                                                            <td>
                                                                 {{ \Carbon\Carbon::parse($order->date)->format('Y-m-d')  }}
                                                            </td>
                                                            <td>
                                                                {{ $order->first_name." "."$order->last_name" }}
                                                            </td>
                                                            <td>{{ "Rs. ".$order->payment_amount .".00"}}</td>
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
                                                        </tr>
                                                        @endforeach
                                                 

                                                    </tbody>
                                                </table>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-6">
                                    <div class="card m-b-30">
                                        <div class="card-body new-user">
                                            <h5 class="header-title mb-3 mt-0">New Users</h5>
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="border-top-0 w-60"></th>
                                                            <th class="border-top-0">Name</th>
                                                            <th class="border-top-0">Phone</th>
                                                            <th class="border-top-0">Address</th>
                                          
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($customer_list as $customer)
                                                            
                                                   
                                                        <tr>
                                                            <td>
                                                                <img class="rounded-circle" src="/images/users/{{$customer->profile_photo  }}" alt="user" width="40"> </td>
                                                            <td>
                                                                <a href="javascript:void(0);">  {{ $customer->first_name." "."$customer->last_name" }}</a>
                                                            </td>
                                                            <td>
                                                                {{$customer->phone  }}
                                                            </td>
                                                            <td>
                                                                {{$customer->address  }}
                                                            </td>
                                                  
                                                        </tr>
                                                        @endforeach
                                               

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           

                        </div>
                        <!-- container -->

                    </div>
                    <!-- Page content Wrapper -->
                </div>
                <!-- content -->
        
        
        
    
@endsection


