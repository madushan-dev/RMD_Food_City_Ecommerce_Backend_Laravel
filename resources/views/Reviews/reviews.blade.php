@extends('layouts.app',['title' => 'Reviews'])

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
                                                <li class="breadcrumb-item active">All Reviews</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">All Reviews</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
   
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">            
                                                      
                                            <table id="datatable-buttons" class="table table-striped table-bordered w-100">
                                                <thead>
                                                <tr>
                                                    <th>Review Id</th>
                                                    <th>Date</th>
                                                    <th>Product</th>
                                                    <th>Customer</th>
                                                    <th>Rating</th>
                                                    <th>Comment</th>
                                                    <th>Status</th>
                                                    <th class="text-right">Action</th>
                                                </tr>
                                                </thead>
                                         
                                                <tbody>
                                                    @foreach ($reviews as $review )
                                                  
                                                    <tr>
                                                        <td>{{ $review->id }}</td>

                                                    
                                                        <td class="w-100">{{ $review->created_at }}</td>
                                              
                                                      


                                                        <td>{{ $review->products->name }}</td>
                                                        <td>{{ $review->customers->first_name ." ".$review->customers->last_name }}</td>
                                                        
                                                        
                                                        <td class="w-100">
                                                            @for ($i = $review->rating; $i > 0; $i--)
                                                            <i class="mdi mdi-star"></i>
                                                             @endfor

                                                        </td>

                                                        <td>{{ $review->comment }}</td>
                                                        <td><span class="badge badge-pill badge-warning p-2 text-center w-100"> {{ $review->status }}</span></td>
                                                        <td class="text-right d-flex align-items-center"><a href="{{ route('reviews') ."/". $review->id }}" type="button" class="btn btn-raised btn-primary px-3 py-0 mr-1" style="height:100%">
                                                            View </a>
                                                        <form action="{{ route('reviews')}}/{{ $review->id }}" method="POST" class="m-0">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-raised btn-danger  px-3 py-0">
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