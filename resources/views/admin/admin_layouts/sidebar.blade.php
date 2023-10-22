<div class="page-sidebar">
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle lazyloaded blur-up" src="{{ asset(Auth::user()->image) }}"
                    alt="#">
            </div>
            <h6 class="mt-3 f-14">{{ Auth::user()->name }}</h6>
            <p>Restaurant</p>
        </div>
        <ul class="sidebar-menu">
            <li><a class="sidebar-header" href="/"><i data-feather="home"></i><span>Dashboard</span></a></li>
            @if (Auth::user()->role == 'Admin')
                
                <li><a class="sidebar-header" href="javascript:void(0)"><i
                            data-feather="align-left"></i><span>Category</span><i
                            class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{ route('categories.index') }}"><i class="fa fa-circle"></i>All Category</a>
                        </li>
                    </ul>
                </li>


                <li><a class="sidebar-header" href=""><i data-feather="settings"></i><span>Settings</span><i
                            class="fa fa-angle-right pull-right"></i></a>
                    <ul class="sidebar-submenu">
                        {{-- <li><a href="{{ route('banners.index') }}"><i class="fa fa-circle"></i>Home Banner's</a></li> --}}
                        {{-- <li><a href="{{ route('home-settings') }}"><i class="fa fa-circle"></i>Home Setting</a></li> --}}
                    </ul>
                </li>
            @endif
            <li><a class="sidebar-header" href="javascript:void(0)"><i data-feather="box"></i><span>Products</span><i
                        class="fa fa-angle-right pull-right"></i></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('products.index') }}"><i class="fa fa-circle"></i>Product List</a></li>
                    <li><a href="{{ route('products.create') }}"><i class="fa fa-circle"></i>Create Product</a></li>
                </ul>
            </li>

            


            {{-- <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="order.html"><i class="fa fa-circle"></i>Orders</a></li>
                            <li><a href="transactions.html"><i class="fa fa-circle"></i>Transactions</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="tag"></i><span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="coupon-list.html"><i class="fa fa-circle"></i>List Coupons</a></li>
                            <li><a href="coupon-create.html"><i class="fa fa-circle"></i>Create Coupons </a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="javascript:void(0)"><i data-feather="clipboard"></i><span>Pages</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="pages-list.html"><i class="fa fa-circle"></i>List Page</a></li>
                            <li><a href="page-create.html"><i class="fa fa-circle"></i>Create Page</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="media.html"><i data-feather="camera"></i><span>Media</span></a></li>
                    
                    <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="user-list.html"><i class="fa fa-circle"></i>User List</a></li>
                            <li><a href="create-user.html"><i class="fa fa-circle"></i>Create User</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="users"></i><span>Vendors</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="list-vendor.html"><i class="fa fa-circle"></i>Vendor List</a></li>
                            <li><a href="create-vendors.html"><i class="fa fa-circle"></i>Create Vendor</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="chrome"></i><span>Localization</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="translations.html"><i class="fa fa-circle"></i>Translations</a></li>
                            <li><a href="currency-rates.html"><i class="fa fa-circle"></i>Currency Rates</a></li>
                            <li><a href="taxes.html"><i class="fa fa-circle"></i>Taxes</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="reports.html"><i data-feather="bar-chart"></i><span>Reports</span></a></li>
                    <li><a class="sidebar-header" href=""><i data-feather="settings" ></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="profile.html"><i class="fa fa-circle"></i>Profile</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="invoice.html"><i data-feather="archive"></i><span>Invoice</span></a>
                    </li>
                    <li><a class="sidebar-header" href="login.html"><i data-feather="log-in"></i><span>Login</span></a>
                    </li> --}}
        </ul>
    </div>
</div>
