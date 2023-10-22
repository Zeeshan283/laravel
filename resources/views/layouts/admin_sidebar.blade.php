  <!-- Page Sidebar Start-->
  <div class="page-sidebar">
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle lazyloaded blur-up" src="../assets/admin/images/dashboard/man.png" alt="#">
            </div>
            <h6 class="mt-3 f-14">{{ Auth::user()->name }}</h6>
            <p>{{ Auth::user()->r_name}}</p>
        </div>
        
        <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="{{ route('admin')}}"><i data-feather="home"></i><span>Dashboard</span></a></li>
            <li><a class="sidebar-header" href="javascript:void(0)"><i data-feather="box"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                        {{-- <a href="javascript:void(0)"><i class="fa fa-circle"></i>
                            <span>Physical</span> <i class="fa fa-angle-right pull-right"></i>
                        </a> --}}
                        {{-- <ul class="sidebar-submenu"> --}}
                    {{-- <li><a href="{{ route('category')}}"><i class="fa fa-circle"></i>Category</a></li> --}}
                    {{-- <li><a href="{{ route('sub_category')}}"><i class="fa fa-circle"></i>Sub Category</a></li>
                    <li><a href="{{ route('products')}}"><i class="fa fa-circle"></i>Product List</a></li>
                    <li><a href="{{ route('pdetails')}}"><i class="fa fa-circle"></i>Product Detail</a></li> --}}
                    <li><a href="{{ route('products.create')}}"><i class="fa fa-circle"></i>Add Product</a></li>
                    <li><a href="{{ route('products.index')}}"><i class="fa fa-circle"></i>All Products</a></li>
                        {{-- </ul> --}}
                </ul>
            </li>
             <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Category</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('categories.index')}}"><i class="fa fa-circle"></i>Catrgory List</a></li>
                    <li><a href="{{ route('categories.create')}}"><i class="fa fa-circle"></i>Create Category</a></li>
                </ul>
            </li>
             <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('userlist')}}"><i class="fa fa-circle"></i>User List</a></li>
                    <li><a href="{{ route('createuser')}}"><i class="fa fa-circle"></i>Create User</a></li>
                </ul>
            </li>
           
            <li><a class="sidebar-header" href=""><i data-feather="tag"></i><span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('userlist')}}"><i class="fa fa-circle"></i>List Coupons</a></li>
                    <li><a href="{{ route('createuser')}}"><i class="fa fa-circle"></i>Create Coupons </a></li>
                </ul>
            </li>           
            <li><a class="sidebar-header" href=""><i data-feather="users"></i><span>Vendors</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="list-vendor.html"><i class="fa fa-circle"></i>Vendor List</a></li>
                    <li><a href="create-vendors.html"><i class="fa fa-circle"></i>Create Vendor</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>Reports</span></a></li>
            <li><a class="sidebar-header" href=""><i data-feather="settings" ></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('profile')}}"><i class="fa fa-circle"></i>Profile</a></li>
                </ul>
            </li>
            <li><a class="sidebar-header" href="invoice.html"><i data-feather="archive"></i><span>Invoice</span></a>
            </li>
            <li><a class="sidebar-header" href="login.html"><i data-feather="log-in"></i><span>Login</span></a>
            </li>
        </ul>
    </div>
</div>
<!-- Page Sidebar Ends-->