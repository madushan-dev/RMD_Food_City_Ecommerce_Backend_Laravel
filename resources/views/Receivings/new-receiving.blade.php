@php
    $title = 'New Receiving';
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
                                        <h4 class="page-title">Receiving Details</h4>
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

                                        <form action="{{ route('receivings')}}/new" method="POST">
                                                @csrf
                                       
                                            <div class="general-label items-container">
                                                <div class="row">
                                                    
                                                    <div class="form-group mb-2 col-12">
                                                        <h4 class="header-title mt-0 pb-2">Select Supplier</h4>
                                                    
                                                                                        
                                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="supplier_id">

                                                            @foreach ($suppliers as $supplier)
                                                            <option value="{{ $supplier->id }}"
                                                           >{{ $supplier->company }}</option>

                                                      
                                                       @endforeach
                                                   </select>
                                                    </div>
                                                    
                                    
                                                </div>
                                                <div class="row">
                                                    <div class="form-group mb-2 col-6">
                                                        <h4 class="header-title mt-0 pb-2  ">Select Products</h4>
                                                    
                                                        
                                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="product_id[]">

                                                             @foreach ($products as $product)
                                                             <option value="{{ $product->id }}"
                                                            >{{ $product->name }}</option>

                                                       
                                                        @endforeach
                                                    </select>
                                                    </div>

                                                    
                                                    <div class="form-group mb-2 col-6">
                                                        <h4 class="header-title mt-0 pb-2  ">Select Quantity</h4>

                                                        <input class="form-control" type="number" value="1" name="quantity[]">
                                                               
                                                    </div>


                                                </div>



                                                
                                    
                                                   
    
                                                   
     
                                                  
                                             
                                            </div>
                                            <button type="button" class="btn btn-primary add-items my-5">Add Items </button>
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

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
       
      
      
      
      
      
      
      
      
      
      
      
      
      
       $( document ).ready(function() {


        $(".add-items").click(function () {
        event.preventDefault();

        $(".items-container").append(
            '<div class="row mt-3"> <div class="form-group mb-2 col-6"> <h4 class="header-title mt-0 pb-2  ">Select Products</h4><select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="product_id[]">    @foreach ($products as $product)<option value="{{ $product->id }}">{{ $product->name }}</option>          @endforeach</select></div><div class="form-group mb-2 col-6"><h4 class="header-title mt-0 pb-2  ">Select Quantity</h4><input class="form-control" type="number" value="1" name="quantity[]"></div></div>'
        );

      });
        
        
    
    });

    
    </script>



</html>

@endsection


