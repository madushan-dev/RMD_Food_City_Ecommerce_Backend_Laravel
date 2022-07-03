@php
    $title = 'New Supplier';
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
                                        <h4 class="page-title">Supplier Details</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
   
                            
                 
                          
                            <div class="row">
                        
                                <div class="col-md-12 col-xl-12">
                                    <div class="card m-b-30">
                                 
                                     
                                        <div class="card-body">
                                            
                                            @if ($errors->any())
                                            <div class="alert bg-danger text-white">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif








                                        <form action="{{ route('suppliers')}}/new" method="POST">
                                                @csrf
                                       
                                            <div class="general-label">
                                                <div class="row">
                                                    <div class="form-group mb-2 col-6">
                                                        <h4 class="header-title mt-0 pb-2">Company Name</h4>
                                                    
                                                        <input type="text" name="company" id="" class="form-control mb-3 customer-status-form" placeholder="Enter First Name">
                                                    </div>
                                                    <div class="form-group mb-2 col-6">
                                                        <h4 class="header-title mt-0 pb-2">Address</h4>
                                                    
                                                        <input type="text" name="address" id="" class="form-control mb-3 customer-status-form" placeholder="Enter Address">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="form-group mb-2 col-6">
                                                        <h4 class="header-title mt-0 pb-2">Phone Number</h4>
                                                    
                                                        <input type="text" name="phone" id="" class="form-control mb-3 customer-status-form" placeholder="Enter Phone Number">
                                                    </div>
                                                    <div class="form-group mb-2 col-6">
                                                        <h4 class="header-title mt-0 pb-2">Email</h4>
                                                    
                                                        <input type="email" name="email" id="" class="form-control mb-3 customer-status-form" placeholder="Enter Email Address">
                                                    </div>

                                                </div>
                                    
                                                   
    
                                                   
     
                                                  
                                             
                                            </div>

                                            <div class="row">
                                                
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-raised mb-0 w-100">Submit</button>
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