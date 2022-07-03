   <!-- ========== Left Sidebar Start ========== -->
   <div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="mdi mdi-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i> Urora</a>-->
            <a href="/" class="logo">
               <p class="text-white font-weight-bold" style="font-size: 130% !important;">RMD FOOD CITY</p>
            </a>
        </div>
    </div>

    <div class="sidebar-inner slimscrollleft" id="sidebar-main">

        <div id="sidebar-menu">
            <ul>
               
                <li>
                    <a href="/" class="waves-effect">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Dashboard
                            
                        </span>
                    </a>
                </li>
                <li>
                    <a href="/orders" class="waves-effect">
                        <i class="mdi mdi-cart"></i>
                        <span> Orders
                            
                        </span>
                    </a>
                </li>
             
               
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="mdi mdi-animation"></i>
                        <span> Products </span>
                        <span class="float-right">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    
                    <ul class="list-unstyled">
                        <li>
                            <a href="/products">All Products</a>
                        </li>
                        <li>
                            <a href="/products/new">Add New Product</a>
                        </li>
                        <li>
                            <a href="/categories">Categories</a>
                        </li>
                        <li>
                            <a href="/brands">Brands</a>
                        </li>
                
                    </ul>
                </li>
                    

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="fa fa-user"></i>
                        <span> Customers </span>
                        <span class="float-right">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="/customers">All Customers</a>
                        </li>
                        <li>
                            <a href="/customers/new">Add New Customer</a>
                        </li>
                    </ul>
                </li>

                @php
                    $user_type = Auth::user()->user_type;
                @endphp

                @if ( $user_type != "Cashier")
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="fa fa-user-plus"></i>
                        <span>Suppliers </span>
                        <span class="float-right">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="/suppliers">All Suppliers</a>
                        </li>
                        <li>
                            <a href="/suppliers/new">New Supplier</a>
                        </li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="fa fa-th-large"></i>
                        <span>Recievings </span>
                        <span class="float-right">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="/receivings">All Receivings</a>
                        </li>
                        <li>
                            <a href="/receivings/new">New Recieving</a>
                        </li>
                    </ul>
                </li>


                @if ($user_type != "Manager")
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="fa fa-users"></i>
                        <span> Employees </span>
                        <span class="float-right">
                            <i class="mdi mdi-chevron-right"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="/employees">All Employees</a>
                        </li>
                        <li>
                            <a href="/employees/new">Add New Employee</a>
                        </li>
                        
                    </ul>
                </li>
                    
                @endif
      

                <li>
                    <a href="/messages" class="waves-effect">
                        <i class="mdi mdi-message-processing"></i>
                        <span> Messages
                            
                        </span>
                    </a>
                </li>
                <li>
                    <a href="/reviews" class="waves-effect">
                        <i class="mdi mdi-star-circle"></i>
                        <span> Reviews
                            
                        </span>
                    </a>
                </li>
                @if ($user_type != "Manager")
                <li>
                    <a href="/settings" class="waves-effect">
                        <i class="fa fa-gear"></i>
                        <span> Settings
                            
                        </span>
                    </a>
                </li>
                @endif
                
                    
                @endif
                <li>
                    <a href="/profile" class="waves-effect">
                        <i class="fa fa-user"></i>
                        <span> Edit Profile
                            
                        </span>
                    </a>
                </li>


                

            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->