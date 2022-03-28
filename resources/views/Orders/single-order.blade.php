@php
    $title = 'Order Number - '.$id;
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
                                       
                                            <div class="general-label">
                                                
                                              
                                                    <div class="form-group">            
                                                                     
                                                        <p class="font-weight-bold mt-5 text-center" style="font-size: 130%">
                                                            Grand Total - Rs. 6,100.00</p>   
                                                      
                                                        <div class="form-group mt-3">          
                                                            <h4 class="header-title mt-0">Select Payment Method</h4>   
                                                    
                                                               
                                                                <div class="radio pl-3">
                                                                    <label>
                                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                                   Cash
                                                                    </label>
                                                                </div>
                                                                <div class="radio pl-3">
                                                                    <label>
                                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                                                    Bank Transfer
                                                                    </label>
                                                                </div>
                                                          
                                                       
                                                        </div>
                                                        
                                                   
                                                           
                                                    </div>
                                                    
                                                    
                                                                                                   
                                                  
                                                  
                                             
                                            </div>
                                            
                                        </div>
                                        
                                   
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-12 col-xl-4">
                                    <div class="card m-b-30">
                                 
                                        <div class="card-body">
                                       
                                            <div class="general-label">
                                                
                                                    <div class="form-group mb-3">
                                                        <h4 class="header-title mt-0 pb-2">Change Order Status</h4>
                                                       
                                               
                                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                            
                                                         
                                                            
                                                                <option value="CA">Processing</option>
                                                                <option value="NV">On Delivery</option>
                                                                <option value="OR">Completed</option>
                                                                <option value="WA">Cancelled</option>
                                                            
                                                          
                                                        </select>       
                                                    </div>   <div class="form-group mb-3">
                                                        <h4 class="header-title mt-0 pb-2">Enter Delivery Details</h4>
                                                       
                                                        <input type="text" name="company" id="" class="form-control mb-3 order-status-form" placeholder="Delivery Company">

                                                        <input type="text" name="tracking-code" id="" class="form-control order-status-form" placeholder="Tracking Code">
                                                    </div>
                                                    
                                                  
                                             
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-raised mb-0">Submit</button>
                                                    
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