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
                                                        <h5 class="mt-0 round-inner">18090</h5>
                                                        <p class="mb-0 ">Visits Today</p>
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
                                                        <h5 class="mt-0 round-inner">562</h5>
                                                        <p class="mb-0 ">New Users</p>
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
                                                        <h5 class="mt-0 round-inner">7514</h5>
                                                        <p class="mb-0 ">New Orders</p>
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
                                                        <h5 class="mt-0 round-inner">$32874</h5>
                                                        <p class="mb-0">Total Sales</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>

                            <div class="row">
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
                            <div class="row">
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
                                            <h5 class="header-title mb-3 mt-0">Order List</h5>
                                            <div class="table-responsive">
                                                <table class="table table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="border-top-0 w-60">Product</th>
                                                            <th class="border-top-0">Pro Name</th>
                                                            <th class="border-top-0">Country</th>
                                                            <th class="border-top-0">Order Date/Time</th>
                                                            <th class="border-top-0">Pcs.</th>
                                                            <th class="border-top-0">Amount ($)</th>
                                                            <th class="border-top-0">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <img class="" src="/images/products/pro1.png" alt="user" width="40"> </td>
                                                            <td>
                                                                Chair
                                                            </td>
                                                            <td>
                                                                <img src="/images/flags/us_flag.jpg" alt="" width="30">
                                                            </td>
                                                            <td>3/09/2018 4:29 PM</td>
                                                            <td>2</td>
                                                            <td> $ 50</td>
                                                            <td>
                                                                <span class="badge badge-boxed  badge-success">Shipped</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="" src="/images/products/pro2.png" alt="user" width="40"> </td>
                                                            <td>
                                                                Mobile
                                                            </td>
                                                            <td>
                                                                <img src="/images/flags/french_flag.jpg" alt="" width="30">
                                                            </td>
                                                            <td>3/15/2018 1:09 PM</td>
                                                            <td>1</td>
                                                            <td> $ 70</td>
                                                            <td>
                                                                <span class="badge badge-boxed  badge-danger">Delivered</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="" src="/images/products/pro3.png" alt="user" width="40"> </td>
                                                            <td>
                                                                LED
                                                            </td>
                                                            <td>
                                                                <img src="/images/flags/spain_flag.jpg" alt="" width="30">
                                                            </td>
                                                            <td>3/18/2018 12:09 PM</td>
                                                            <td>3</td>
                                                            <td> $ 200</td>
                                                            <td>
                                                                <span class="badge badge-boxed badge-warning">Pending</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="" src="/images/products/pro4.png" alt="user" width="40"> </td>
                                                            <td>
                                                                Chair
                                                            </td>
                                                            <td>
                                                                <img src="/images/flags/russia_flag.jpg" alt="" width="30">
                                                            </td>
                                                            <td>3/27/2018 8:27 PM</td>
                                                            <td>2</td>
                                                            <td> $ 20</td>
                                                            <td>
                                                                <span class="badge badge-boxed  badge-success">Shipped</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="" src="/images/products/pro2.png" alt="user" width="40"> </td>
                                                            <td>
                                                                Mobile
                                                            </td>
                                                            <td>
                                                                <img src="/images/flags/italy_flag.jpg" alt="" width="30">
                                                            </td>
                                                            <td>4/01/2018 5:09 PM</td>
                                                            <td>1</td>
                                                            <td> $ 150</td>
                                                            <td>
                                                                <span class="badge badge-boxed badge-warning">Pending</span>
                                                            </td>
                                                        </tr>

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
                                                            <th class="border-top-0 w-60">Users</th>
                                                            <th class="border-top-0">Name</th>
                                                            <th class="border-top-0">Country</th>
                                                            <th class="border-top-0">Reviews</th>
                                                            <th class="border-top-0">Socials</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <img class="rounded-circle" src="/images/users/avatar-2.jpg" alt="user" width="40"> </td>
                                                            <td>
                                                                <a href="javascript:void(0);">Ruby T. Curd</a>
                                                            </td>
                                                            <td>
                                                                <img src="/images/flags/us_flag.jpg" alt="" width="30">
                                                            </td>
                                                            <td>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star-half text-warning"></i>
                                                                <i class="mdi mdi-star-outline text-warning"></i>
                                                            </td>
                                                            <td>
                                                                <ul class="list-unstyled list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <i class="ti-facebook text-primary"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <i class="ti-linkedin text-danger"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <i class="ti-twitter-alt text-info"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="rounded-circle" src="/images/users/avatar-3.jpg" alt="user" width="40"> </td>
                                                            <td>
                                                                <a href="javascript:void(0);">William A. Johnson</a>
                                                            </td>
                                                            <td>
                                                                <img src="/images/flags/french_flag.jpg" alt="" width="30">
                                                            </td>
                                                            <td>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star-half text-warning"></i>
                                                                <i class="mdi mdi-star-outline text-warning"></i>
                                                            </td>
                                                            <td>
                                                                <ul class="list-unstyled list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <i class="ti-facebook text-primary"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <i class="ti-linkedin text-danger"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <i class="ti-twitter-alt text-info"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="rounded-circle" src="/images/users/avatar-4.jpg" alt="user" width="40"> </td>
                                                            <td>
                                                                <a href="javascript:void(0);">Bobby M. Gray</a>
                                                            </td>
                                                            <td>
                                                                <img src="/images/flags/spain_flag.jpg" alt="" width="30">
                                                            </td>
                                                            <td>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star-half text-warning"></i>
                                                                <i class="mdi mdi-star-outline text-warning"></i>
                                                            </td>
                                                            <td>
                                                                <ul class="list-unstyled list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <i class="ti-facebook text-primary"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <i class="ti-linkedin text-danger"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <i class="ti-twitter-alt text-info"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="rounded-circle" src="/images/users/avatar-5.jpg" alt="user" width="40"> </td>
                                                            <td>
                                                                <a href="javascript:void(0);">Robert N. Carlile</a>
                                                            </td>
                                                            <td>
                                                                <img src="/images/flags/russia_flag.jpg" alt="" width="30">
                                                            </td>
                                                            <td>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star-half text-warning"></i>
                                                                <i class="mdi mdi-star-outline text-warning"></i>
                                                            </td>
                                                            <td>
                                                                <ul class="list-unstyled list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <i class="ti-facebook text-primary"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <i class="ti-linkedin text-danger"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <i class="ti-twitter-alt text-info"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class="rounded-circle" src="/images/users/avatar-6.jpg" alt="user" width="40"> </td>
                                                            <td>
                                                                <a href="javascript:void(0);">Ruby T. Curd</a>
                                                            </td>
                                                            <td>
                                                                <img src="/images/flags/italy_flag.jpg" alt="" width="30">
                                                            </td>
                                                            <td>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star text-warning"></i>
                                                                <i class="mdi mdi-star-half text-warning"></i>
                                                                <i class="mdi mdi-star-outline text-warning"></i>
                                                            </td>
                                                            <td>
                                                                <ul class="list-unstyled list-inline">
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <i class="ti-facebook text-primary"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <i class="ti-linkedin text-danger"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <a href="#">
                                                                            <i class="ti-twitter-alt text-info"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>

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