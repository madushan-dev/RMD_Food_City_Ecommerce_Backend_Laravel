@extends('layouts.app',['title' => 'Brands'])

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
                                                <li class="breadcrumb-item active">All Brands</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">All Brands</h4>
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
    
                                            @if ($errors->any())
                                                <div class="alert bg-danger text-white">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            

                                                      
                                            <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th style="width:80%">Brand Name</th>
                                                    <th style="width:80%">Description</th>
                                                    <th style="width:20%" class="">Action</th>
                                                </tr>
                                                </thead>
                                         
                                                <tbody>
                                                    @foreach ($brands as $brand )
                                                  
                                                    <tr>
                                                        <td>{{ $brand->id }}</td>
                                                        
                                                    
                                                        <td>{{ $brand->name }}</td>
                                                        <td>{{ $brand->description }}</td>

                                                        <td class="text-right d-flex align-items-center">
                                                        <form action="{{ route('brands')}}/{{ $brand->id }}" method="POST" class="m-0">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-raised btn-danger  px-3 py-0 show_confirm">
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

                                                        
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">            
                                              <h5>Add New Brand</h5>  
                                              <form action="{{ route('brands')}}/new" method="POST">
                                                @csrf
                                       
                                            <div class="general-label">
                                                <div class="row">
                                                    <div class="form-group mb-1 col-6">
                                                        <h4 class="header-title mt-0 pb-2">Brand Name</h4>
                                                    
                                                        <input type="text" name="name" id="" class="form-control mb-1 customer-status-form" placeholder="">
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="form-group mb-2 col-6">
                                                        <h4 class="header-title mt-0 pb-2">Description</h4>
                                                    
                                                        <textarea name="description" id="" cols="70" rows="5"></textarea>
                                                    </div>

                                                </div>
                           
                                                   
     
                                                  
                                             
                                            </div>

                                            <div class="row mt-3">
                                                
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-raised mb-0 w-20">Submit</button>
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