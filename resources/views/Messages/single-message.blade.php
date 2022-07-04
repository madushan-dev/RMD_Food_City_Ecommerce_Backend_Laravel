@php
    $title = 'Message - '.$message->id;
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
                                        <h4 class="page-title">Message Details</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
   
                            
                 
                          
                            <div class="row">
                        
                                <div class="col-md-12 col-xl-12">
                                    <div class="card m-b-30">
                                        @if (session('success'))
                                        <div class="alert bg-success text-center text-white">
                                            {{ session('success') }}
    
    
                                        </div>
                                           
                                        @endif
                                     
                                        <div class="card-body">
                                            <table id="datatable" class="table table-striped table-bordered w-100">
                                                   
                                                 <tr>
                                                     <td>Id</td>
                                                     <td>{{ $message->id }}</td>
                                                 </tr>
                                            
                                                <tr>
                                                    <td>Date</td>
                                                    <td>{{ $message->created_at }}</td>
                                                </tr>
                                                <tr>
                                                    <td>From</td>
                                                    <td>{{ $message->from }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Name</td>
                                                    <td>{{ $message->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Subject</td>
                                                    <td>{{ $message->subject }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Message</td>
                                                    <td>{{ $message->message }}</td>
                                                </tr>                                                
                                                    
                                                   
                                            </table>
                                            </div>

                                            
                                                    
                                        </div>

                                        <div class="card m-b-30">
                                            <div class="card-body">
                                                <h5>Send Reply Email</h5>
                                                    
                                            <form action="{{ route('messages')}}/sendreply/{{ $message->id }}" method="POST">
                                                @csrf
                                                <div class="form-group mb-3">
                                               
                                  
                                                <input type="text" name="message" id="" class="form-control order-status-form mt-3" placeholder="Enter Message" >

                                                <button type="submit" class="btn btn-primary btn-raised mb-0 mt-3">Send Email</button>
                                            </div>

                                            </form>

                                            </div>                         

                                            </div>

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