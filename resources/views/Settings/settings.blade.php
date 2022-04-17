@php
    $title = 'Settings';
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
                                        <h4 class="page-title">System Details</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
   
                            
                 
                          
                            <div class="row">
                        
                                <div class="col-md-12 col-xl-12">
                                    <form action="" method="POST">
                                    <div class="card m-b-30">
                                        
                                        <div class="card ">
                                            <div class="card-body">
                                               
                                                                                              
                                                @csrf
                                                <div class="form-group mb-3">
                                                    <h6>SMTP Settings</h6>
                                               
                                                    <input type="text" name="smtp_host" id="" class="form-control mb-3 order-status-form" placeholder="Enter Host">

                                                    <input type="text" name="smtp_username" id="" class="form-control order-status-form mt-3" placeholder="Enter Username" >

                                                    <input type="password" name="smtp_password" id="" class="form-control order-status-form mt-3" placeholder="Enter Password" >
                                                </div>


                                                <div class="form-group mb-3">
                                                    <h6 class="my-3">SMS Gateway Settings</h6>
                                                    <input type="text" name="sms_api" id="" class="form-control mb-3 order-status-form" placeholder="Enter SMS API">
    
                                                    <input type="text" name="sms_sender_id" id="" class="form-control order-status-form mt-3" placeholder="Enter Sender ID" >
                                                </div>

                                                <div class="form-group mb-3">
                                                     <h6 class="my-3">Payment Gateway Settings</h6>

                                                   
                                                    <input type="text" name="sms_api" id="" class="form-control mb-3 order-status-form" placeholder="Enter Payment Gayeway API">

    
                                                    <button type="submit" class="btn btn-primary btn-raised mb-0 mt-3">Submit</button>
                                                </div>


                                            </div>

                                            </div>                         

                                            </div>                    
        
                                                    </div>

                                    </div>
                                     </form>
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