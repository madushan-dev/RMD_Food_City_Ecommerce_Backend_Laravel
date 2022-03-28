@extends('layouts.app',['title' => 'Orders'])

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
                                                <li class="breadcrumb-item active">All Orders</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">All Orders</h4>
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
                                                    <th>Order Id</th>
                                                    <th>Customer</th>
                                                    <th>Date</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th class="text-right">Action</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Prabash Jayaweera</td>
                                                    <td>2022/02/05</td>
                                                    <td class="text-right">Rs 550.00</td>
                                                    <td><span class="badge badge-pill badge-warning p-2 text-center w-100">Processing</span></td>
                                                    <td class="text-right"><button type="button" class="btn btn-raised btn-primary px-3 py-0">
                                                        View </button>
                                                      
                                                        <button type="button" class="btn btn-raised btn-danger  px-3 py-0">
                                                            Delete </button></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Sudeera Kavishka</td>
                                                    <td>2022/01/10</td>
                                                    <td class="text-right">Rs 620.00</td>
                                                    <td><span class="badge badge-pill badge-success p-2 w-100">Complete</span></td>
                                                    <td class="text-right"><button type="button" class="btn btn-raised btn-primary px-3 py-0">
                                                        View </button>
                                                      
                                                        <button type="button" class="btn btn-raised btn-danger  px-3 py-0">
                                                            Delete </button></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Sudeera Kavishka</td>
                                                    <td>2022/01/10</td>
                                                    <td class="text-right">Rs 620.00</td>
                                                    <td><span class="badge badge-pill badge-success p-2 w-100">Complete</span></td>
                                                    <td class="text-right"><button type="button" class="btn btn-raised btn-primary px-3 py-0">
                                                        View </button>
                                                      
                                                        <button type="button" class="btn btn-raised btn-danger  px-3 py-0">
                                                            Delete </button></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Sudeera Kavishka</td>
                                                    <td>2022/01/10</td>
                                                    <td class="text-right">Rs 620.00</td>
                                                    <td><span class="badge badge-pill badge-success p-2 w-100">Complete</span></td>
                                                    <td class="text-right"><button type="button" class="btn btn-raised btn-primary px-3 py-0">
                                                        View </button>
                                                      
                                                        <button type="button" class="btn btn-raised btn-danger  px-3 py-0">
                                                            Delete </button></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Sudeera Kavishka</td>
                                                    <td>2022/01/10</td>
                                                    <td class="text-right">Rs 620.00</td>
                                                    <td><span class="badge badge-pill badge-success p-2 w-100">Complete</span></td>
                                                    <td class="text-right"><button type="button" class="btn btn-raised btn-primary px-3 py-0">
                                                        View </button>
                                                      
                                                        <button type="button" class="btn btn-raised btn-danger  px-3 py-0">
                                                            Delete </button></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Sudeera Kavishka</td>
                                                    <td>2022/01/10</td>
                                                    <td class="text-right">Rs 620.00</td>
                                                    <td><span class="badge badge-pill badge-success p-2 w-100">Complete</span></td>
                                                    <td class="text-right"><button type="button" class="btn btn-raised btn-primary px-3 py-0">
                                                        View </button>
                                                      
                                                        <button type="button" class="btn btn-raised btn-danger  px-3 py-0">
                                                            Delete </button></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Sudeera Kavishka</td>
                                                    <td>2022/01/10</td>
                                                    <td class="text-right">Rs 620.00</td>
                                                    <td><span class="badge badge-pill badge-success p-2 w-100">Complete</span></td>
                                                    <td class="text-right"><button type="button" class="btn btn-raised btn-primary px-3 py-0">
                                                        View </button>
                                                      
                                                        <button type="button" class="btn btn-raised btn-danger  px-3 py-0">
                                                            Delete </button></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Sudeera Kavishka</td>
                                                    <td>2022/01/10</td>
                                                    <td class="text-right">Rs 620.00</td>
                                                    <td><span class="badge badge-pill badge-success p-2 w-100">Complete</span></td>
                                                    <td class="text-right"><button type="button" class="btn btn-raised btn-primary px-3 py-0">
                                                        View </button>
                                                      
                                                        <button type="button" class="btn btn-raised btn-danger  px-3 py-0">
                                                            Delete </button></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Sudeera Kavishka</td>
                                                    <td>2022/01/10</td>
                                                    <td class="text-right">Rs 620.00</td>
                                                    <td><span class="badge badge-pill badge-success p-2 w-100">Complete</span></td>
                                                    <td class="text-right"><button type="button" class="btn btn-raised btn-primary px-3 py-0">
                                                        View </button>
                                                      
                                                        <button type="button" class="btn btn-raised btn-danger  px-3 py-0">
                                                            Delete </button></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Sudeera Kavishka</td>
                                                    <td>2022/01/10</td>
                                                    <td class="text-right">Rs 620.00</td>
                                                    <td><span class="badge badge-pill badge-success p-2 w-100">Complete</span></td>
                                                    <td class="text-right"><button type="button" class="btn btn-raised btn-primary px-3 py-0">
                                                        View </button>
                                                      
                                                        <button type="button" class="btn btn-raised btn-danger  px-3 py-0">
                                                            Delete </button></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Sudeera Kavishka</td>
                                                    <td>2022/01/10</td>
                                                    <td class="text-right">Rs 620.00</td>
                                                    <td><span class="badge badge-pill badge-success p-2 w-100">Complete</span></td>
                                                    <td class="text-right"><button type="button" class="btn btn-raised btn-primary px-3 py-0">
                                                        View </button>
                                                      
                                                        <button type="button" class="btn btn-raised btn-danger  px-3 py-0">
                                                            Delete </button></td>
                                                </tr>
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