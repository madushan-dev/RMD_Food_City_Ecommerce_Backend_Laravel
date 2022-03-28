@extends('layouts.app',['title' => 'Add New Order'])

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
                                                <li class="breadcrumb-item active">Add New Order</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">New Order</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end page title end breadcrumb -->
   
                            <form action="">
                          
                            <div class="row">
                                <div class="col-md-12 col-xl-12">
                                    <div class="card m-b-30">
                                 
                                        <div class="card-body">
                                       
                                            <div class="general-label">
                                                
                                                    <div class="form-group">            
                                                        <h4 class="header-title mt-0">
                                                            Select Products</h4>                
                                                        <table class="table mb-0">
                                                            <thead>
                                                                <tr>
                                                                <th scope="col" style="width:5%">#</th>
                                                                <th scope="col" style="width:40%">Item</th>
                                                                <th scope="col" style="width:20%">Price</th>
                                                                <th scope="col" style="width:15%">Quantity</th>
                                                                <th scope="col" style="width:20%">Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                <th scope="row">1</th>
                                                                <td>Maliban Chocolate Cream Biscuit</td>
                                                                <td>Rs 80.00</td>
                                                                <td>10</td>
                                                                <td>Rs 800.00</td>
                                                                </tr>
                                                                <tr>
                                                                <th scope="row">2</th>
                                                                <td>Kohomba Soap 50g</td>
                                                                <td>Rs 60.00</td>
                                                                <td>5</td>
                                                                <td>Rs 300.00</td>
                                                                </tr>
                                                                <tr>
                                                                <th scope="row">3</th>
                                                                <td>Maliban Biscuit 400g</td>
                                                                <td>Rs. 500.00</td>
                                                                <td>10</td>
                                                                <td>Rs. 5000.00</td>
                                                                </tr>
                                                               
                                                            </tbody>
                                                        </table>  
                                              
                                                        <button type="submit" class="btn btn-primary btn-raised mb-0 mt-3 w-100">Add Product</button>
                                                      
                                                           
                                                    </div>
                                                    
                                                    
                                                  
                                                    
                                                  
                                             
                                            </div>
                                            
                                        </div>
                                        
                                   
                                    </div>
                                </div> <!-- end col -->

                                                                                                                                         
                            </div> <!-- end row -->
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
                                                        <h4 class="header-title mt-0">Select Customer</h4>
                                                       
                                               
                                                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                                            <option>Select</option>
                                                         
                                                            
                                                                <option value="CA">California</option>
                                                                <option value="NV">Nevada</option>
                                                                <option value="OR">Oregon</option>
                                                                <option value="WA">Washington</option>
                                                            
                                                          
                                                        </select>       
                                                    </div>
                                                    
                                                  
                                             
                                            </div>
                                              <button type="submit" class="btn btn-danger btn-raised mb-0">Submit Order</button>
                                                    
                                        </div>
                                        
                                   
                                    </div>
                                </div> <!-- end col -->
                                                                                                                                         
                            </div> <!-- end row -->
                          
                              

                                                                                                                                         
                      
                        </form>

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