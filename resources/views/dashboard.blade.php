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
                                                        <h5 class="mt-0 round-inner">Rs. {{ $profit }}.00</h5>
                                                        <p class="mb-0">Total Profit</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>

                            <div class="row" style="display:none">
                                <div class="col-sm-12 col-md-12 col-xl-6">
                                    <div class="card m-b-30">
                                        <div class="card-body metro-widget">
                                            <h5 class="header-title mt-0 pb-3">Statistics</h5>
                                            <div id="morris-bar-example"></div>
                                            <div class="row text-center d-flex justify-content-around">
                                                
                                                <div class="col-4">
                                                    <p class="mb-0 font-14">New Orders</p>
                                                    <div class="live-tile m-0 w-100" data-mode="carousel" data-direction="horizontal" data-delay="3900" data-height="10">
                                                        <div>
                                                            <small class="text-muted"> today</small>
                                                            <h3 class=" text-dark">1,088
                                                             
                                                            </h3>
                                                        </div>
                                                      
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <p class="mb-0 font-14">Visits</p>
                                                    <div class="live-tile m-0 w-100" data-mode="carousel" data-direction="vertical" data-delay="3500" data-height="10">
                                                        <div>
                                                            <small class="text-muted"> today</small>
                                                            <h3 class=" text-dark">1,955</h3>
                                                        </div>
                                                      
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <p class="mb-0 font-14">Bounce Rate</p>
                                                    <div class="live-tile m-0 w-100" data-mode="carousel" data-direction="vertical" data-delay="4200" data-height="10">
                                                        <div>
                                                            <small class="text-muted">Minmum</small>
                                                            <h3 class=" text-dark">3.8 %
                                                            
                                                            </h3>
                                                        </div>
                                                     
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h5 class="header-title mt-0 pb-3">Revenue </h5>
                                            <div id="morris-area-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="display:none">
                                <div class="col-md-12 col-xl-6">
                                    <div class="card m-b-30 h-360">
                                        <div class="card-body">
                                            <h5 class="header-title mt-0 pb-3">Product Stock </h5>
                                            <div class="row">
                                                <div class="col-8">
                                                    <div id="animating-donut" class="ct-chart ct-golden-section"></div>
                                                </div>
                                                <div class="col-4 stock-detail">
                                                    <p>
                                                        <i class="mdi mdi-cellphone text-primary mr-2 mt-3 font-24"></i>20% Mobiles</p>
                                                    <p>
                                                        <i class="mdi mdi-tablet-android text-success mr-2 mt-3 font-24"></i>20% Tablets</p>
                                                    <p>
                                                        <i class="mdi mdi-laptop text-danger mr-2 mt-3 font-24"></i>20% Laptops</p>
                                                    <p>
                                                        <i class="mdi mdi-television text-info mr-2 mt-3 font-24"></i>40% Televisions</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-6">
                                    <div class="card m-b-30 h-360">
                                        <div class="card-body">
                                            <h5 class="header-title mt-0">Order Status </h5>
                                            <div class="row">
                                                <div class="col-6 align-self-center text-center">
                                                    <h6 class="text-muted">Todays Perfomance</h6>
                                                </div>
                                                <div class="col-6 align-self-center text-center">
                                                    <h6 class="font-40">
                                                        <i class="mdi mdi-menu-up text-success"></i>52 %</h6>
                                                </div>
                                            </div>
                                            <div class="text-center mt-4">
                                                <span class="float-right">18%</span>
                                                <span class="badge badge-boxed  badge-danger text-center mb-2">Delivered</span>
                                                <span class="float-left">82%</span>
            
                                                <div class="progress mt-1">
                                                    <div class="progress-bar" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-4">
                                                <span class="float-right">45%</span>
                                                <span class="badge badge-boxed  badge-success mb-2">Shipped</span>
                                                <span class="float-left">55%</span>
            
                                                <div class="progress mt-1">
                                                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-4">
                                                <span class="float-right">70%</span>
                                                <span class="badge badge-boxed badge-warning text-center mb-2">Pending</span>
                                                <span class="float-left">30%</span>
            
                                                <div class="progress mt-1">
                                                    <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
            
                                            <div class="text-center mt-4">
                                                <span class="float-right text-danger">Late</span>
                                                <span class="float-left text-primary">On Time</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-xl-6">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h5 class="header-title mb-3 mt-0">Recent Order</h5>
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="border-top-0">Id</th>
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
                                                                {{ $order->id }}
                                                            <td>
                                                                {{ $order->date }}
                                                            </td>
                                                            <td>
                                                                {{ $order->first_name." "."$order->last_name" }}
                                                            </td>
                                                            <td>{{ "Rs. ".$order->payment_amount .".00"}}</td>
                                                            <td>
                                                                <span class="badge badge-pill badge-warning p-2 ">{{ $order->status }}</span>
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
                                                            <th class="border-top-0">Email</th>
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
                                                            <td>
                                                                {{$customer->email  }}
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


