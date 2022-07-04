@php
    $title = 'Review Number - '.$review->id;
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
                                        <h4 class="page-title">Review Details</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
   
                            
                 
                          
                            <div class="row">
                                <div class="col-md-12 col-xl-8 ">
                                    <div class="card">
                                 
                                        <div class="card-body pl-5 bg-success">
                                       
                                            <div class="general-label">

                                                <div class="order-customer row py-3 mr-1">
                                                   
                                                    <div class="col-md-4 col-xl-4 d-flex align-items-center justify-content-center">
                                                  
                                                        
                                                        <img src="/images/users/user.png" alt="" width="80%">
                                                    </div>

                                                    <div class="col-md-8 col-xl-8 d-flex flex-column justify-content-center align-items-start pt-3 text-white">

                                                        <p class="order-userdetails">Review Id - {{ $review->id }}</p>

                                                        <p class="order-userdetails">Review Date - {{ dateWithoutSeconds($review->created_at) }}</p>

                                                        <p class="order-userdetails">Product - {{ $review->products->name }}</p>

                                                        <p class="order-userdetails"> Rating - 
                                                            @for ($i = $review->rating; $i > 0; $i--)
                                                            <i class="mdi mdi-star text-warning"></i>
                                                             @endfor

                                                        </p>
                                                        <p class="order-userdetails">Comment - {{ $review->comment }}</p>

                                                     
                                            
                                                    
                                                        
                                                       
                                                    </div>
                                                </div>

                                            </div>
                                            
                                        </div>
                                        
                                   
                                    </div>
                                </div> <!-- end col -->
                                <div class="col-md-12 col-xl-4">
                                    <div class="card m-b-30">
                                 
                                     
                                        <div class="card-body">
                                        <form action="{{ route('reviews')}}/{{ $review->id }}" method="POST">
                                                @csrf
                                       
                                            <div class="general-label">
                                                   
                                                    <div class="form-group mb-3">
                                                        <h4 class="header-title mt-0 pb-2">Change Review Status</h4>
                                                       
                                               
                                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="status">
                                                            
                                                         
                                                                @php
                                                                    $selected = $review->status;
                                                                    
                                                                @endphp
                                                                

                                                                <option value="Pending"
                                                                    @if ($selected == 'Pending')
                                                                        {{ 'selected' }}
                                                                  @endif
                                                                >Pending</option>
                                                                <option value="Approved"
                                                                    @if ($selected == 'Approved')
                                                                        {{ 'selected' }}
                                                                    @endif
                                                            >Approved</option>
                                                                                                                            
                                                          
                                                        </select>       
                                                    </div> 
                                                    
                                                  
                                             
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