<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bigdeal admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Bigdeal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <title>Bigdeal - Premium Admin Template</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/flag-icon.css">

    <!-- Datatable css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/datatables.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
</head>
<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="../assets/images/layout-2/logo/logo.png" alt=""></a></div>
        </div>
        <div class="main-header-right ">
            <div class="mobile-sidebar">
                <div class="media-body text-end switch-sm">
                    <label class="switch">
                        <input id="sidebar-toggle" type="checkbox" checked="checked"><span class="switch-state"></span>
                    </label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search.."><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                            </div>
                        </form>
                    </li>
                    <li class="onhover-dropdown"><a class="txt-dark" href="javascript:void(0)">
                        <h6>EN</h6></a>
                        <ul class="language-dropdown onhover-show-div p-20">
                            <li><a href="javascript:void(0)" data-lng="pt"><i class="flag-icon flag-icon-uy"></i> Portuguese</a></li>
                            <li><a href="javascript:void(0)" data-lng="es"><i class="flag-icon flag-icon-um"></i> Spanish</a></li>
                            <li><a href="javascript:void(0)" data-lng="en"><i class="flag-icon flag-icon-is"></i> English</a></li>
                            <li><a href="javascript:void(0)" data-lng="fr"><i class="flag-icon flag-icon-nz"></i> French</a></li>
                        </ul>
                    </li>
                    <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                    <li class="onhover-dropdown"><i data-feather="bell"></i><span class="badge badge-pill badge-primary pull-right notification-badge">3</span><span class="dot"></span>
                        <ul class="notification-dropdown custom-scrollbar onhover-show-div p-0">
                            <li>
                                <div class="media">
                                    <div class="notification-icons bg-success me-3"><i data-feather="thumbs-up"></i></div>
                                    <div class="media-body">
                                        <h6 class="font-success">Someone Likes Your Posts</h6>
                                        <p class="mb-0"> 2 Hours Ago</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="notification-icons bg-info me-3"><i data-feather="message-circle"></i></div>
                                    <div class="media-body">
                                        <h6 class="font-info">3 New Comments</h6>
                                        <p class="mb-0"> 1 Hours Ago</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="notification-icons bg-secondary me-3"><i data-feather="download"></i></div>
                                    <div class="media-body">
                                        <h6 class="font-secondary">Download Complete</h6>
                                        <p class="mb-0"> 3 Days Ago</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="notification-icons bg-success bg-warning me-3">
                                        <i data-feather="gift"></i>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="font-secondary">New Order Recieved</h6>
                                        <p class="mb-0"> 4 Days Ago</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="notification-icons bg-success me-3">
                                        <i data-feather="airplay"></i>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="font-secondary">Apps are ready for update</h6>
                                        <p class="mb-0"> 3 Minutes Ago</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="notification-icons bg-info me-3">
                                        <i data-feather="alert-circle"></i>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="font-secondary">Server Warning</h6>
                                        <p class="mb-0"> Just Now</p>
                                    </div>
                                </div>
                            </li>

                            <li class="bg-light txt-dark"><a href="javascript:void(0)" data-original-title="" title="">All </a> notification</li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)"><i class="right_side_toggle" data-feather="message-square"></i><span class="dot"></span></a></li>
                    <li class="onhover-dropdown">
                        <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="../assets/images/dashboard/man.png" alt="header-user">
                            <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span></div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            <li><a href="javascript:void(0)">Profile<span class="pull-right"><i data-feather="user"></i></span></a></li>
                            <li><a href="javascript:void(0)">Inbox<span class="pull-right"><i data-feather="mail"></i></span></a></li>
                            <li><a href="javascript:void(0)">Taskboard<span class="pull-right"><i data-feather="file-text"></i></span></a></li>
                            <li><a href="javascript:void(0)">Settings<span class="pull-right"><i data-feather="settings"></i></span></a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="../assets/images/dashboard/man.png" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">JOHN</h6>
                    <p>Ux Designer</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="index.html"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <li><a class="sidebar-header" href="javascript:void(0)"><i data-feather="box"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-circle"></i>
                                    <span>Physical</span> <i class="fa fa-angle-right pull-right"></i>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="category.html"><i class="fa fa-circle"></i>Category</a></li>
                                    <li><a href="category-sub.html"><i class="fa fa-circle"></i>Sub Category</a></li>
                                    <li><a href="product-list.html"><i class="fa fa-circle"></i>Product List</a></li>
                                    <li><a href="product-detail.html"><i class="fa fa-circle"></i>Product Detail</a></li>
                                    <li><a href="add-product.html"><i class="fa fa-circle"></i>Add Product</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-circle"></i>
                                    <span>Digital</span> <i class="fa fa-angle-right pull-right"></i>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="category-digital.html"><i class="fa fa-circle"></i>Category</a></li>
                                    <li><a href="category-digitalsub.html"><i class="fa fa-circle"></i>Sub Category</a></li>
                                    <li><a href="product-listdigital.html"><i class="fa fa-circle"></i>Product List</a></li>
                                    <li><a href="add-digital-product.html"><i class="fa fa-circle"></i>Add Product</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
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
                    <li><a class="sidebar-header" href="javascript:void(0)"><i data-feather="align-left"></i><span>Menus</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="menu-list.html"><i class="fa fa-circle"></i>Menu Lists</a></li>
                            <li><a href="create-menu.html"><i class="fa fa-circle"></i>Create Menu</a></li>
                        </ul>
                    </li>
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
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <!-- Right sidebar Start-->
        <div class="right-sidebar" id="right_side_bar">
            <div>
                <div class="container p-0">
                    <div class="modal-header p-l-20 p-r-20">
                        <div class="col-sm-8 p-0">
                            <h6 class="modal-title font-weight-bold">FRIEND LIST</h6>
                        </div>
                        <div class="col-sm-4 text-end p-0"><i class="me-2" data-feather="settings"></i></div>
                    </div>
                </div>
                <div class="friend-list-search mt-0">
                    <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
                </div>
                <div class="p-l-30 p-r-30">
                    <div class="chat-box">
                        <div class="people-list friend-list">
                            <ul class="list">
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/images/dashboard/user.png" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Vincent Porter</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/images/dashboard/user1.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Ain Chavez</div>
                                        <div class="status"> 28 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/images/dashboard/user2.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Kori Thomas</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/images/dashboard/user3.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Erica Hughes</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/images/dashboard/man.png" alt="">
                                    <div class="status-circle offline"></div>
                                    <div class="about">
                                        <div class="name">Ginger Johnston</div>
                                        <div class="status"> 2 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/images/dashboard/user5.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Prasanth Anand</div>
                                        <div class="status"> 2 hour ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/images/dashboard/designer.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Hileri Jecno</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right sidebar Ends-->

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Vendor List
                                    <small>Menu Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Vendors</li>
                                <li class="breadcrumb-item active">Vendor List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h5>Vendor Details</h5>
                    </div>
                    <div class="card-body vendor-table">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Vendor</th>
                                <th>Products</th>
                                <th>Store Name</th>
                                <th>Create Date</th>
                                <th>Wallet Balance</th>
                                <th>Revenue</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="../assets/images/team/2.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Petey Cruiser</span>
                                    </div>
                                </td>
                                <td>1670</td>
                                <td>Warephase</td>
                                <td>8/10/18</td>
                                <td>$576132</td>
                                <td>$9761266</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="../assets/images/dashboard/user5.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Rowan torres</span>
                                    </div>
                                </td>
                                <td>790</td>
                                <td>Sunnamplex</td>
                                <td>5/6/18</td>
                                <td>$87610</td>
                                <td>$631479</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="../assets/images/dashboard/boy-2.png" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Gray Brody</span>
                                    </div>
                                </td>
                                <td>579</td>
                                <td>Conecom</td>
                                <td>25/2/18</td>
                                <td>$245508</td>
                                <td>$1279520</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="../assets/images/dashboard/user.png" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Lane Skylar</span>
                                    </div>
                                </td>
                                <td>8972</td>
                                <td>Golddex</td>
                                <td>30/3/18</td>
                                <td>$7812483</td>
                                <td>$8761424</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="../assets/images/dashboard/designer.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Colton Clay</span>
                                    </div>
                                </td>
                                <td>9710</td>
                                <td>Green-Plus</td>
                                <td>6/5/18</td>
                                <td>$780250</td>
                                <td>$8793611</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="../assets/images/dashboard/user2.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Woters maxine</span>
                                    </div>
                                </td>
                                <td>680</td>
                                <td>Kan-code</td>
                                <td>15/4/18</td>
                                <td>$27910</td>
                                <td>$579214</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="../assets/images/dashboard/user1.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Lane Skylar</span>
                                    </div>
                                </td>
                                <td>8678</td>
                                <td>Plexzap</td>
                                <td>4/8/18</td>
                                <td>$89340</td>
                                <td>$10285255</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="../assets/images/dashboard/user3.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Perez Alonzo</span>
                                    </div>
                                </td>
                                <td>3476</td>
                                <td>Betatech</td>
                                <td>17/9/18</td>
                                <td>$32451</td>
                                <td>$647212</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="../assets/images/team/3.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Anna Mull</span>
                                    </div>
                                </td>
                                <td>1670</td>
                                <td>Zotware</td>
                                <td>8/10/18</td>
                                <td>$576132</td>
                                <td>$9761266</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex vendor-list">
                                        <img src="../assets/images/team/1.jpg" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                        <span>Paige Turner</span>
                                    </div>
                                </td>
                                <td>4680</td>
                                <td>Finhigh</td>
                                <td>11/7/18</td>
                                <td>$87616</td>
                                <td>$947611</td>
                                <td>
                                    <div>
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        <i class="fa fa-trash font-danger"></i>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">Copyright 2019 © Bigdeal All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end-->

    </div>

</div>

<!-- latest jquery-->
<script src="../assets/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="../assets/js/sidebar-menu.js"></script>

<!-- Datatables js-->
<script src="../assets/js/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/js/datatables/custom-basic.js"></script>

<!--Customizer admin-->
<script src="../assets/js/admin-customizer.js"></script>

<!-- lazyload js-->
<script src="../assets/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="../assets/js/chat-menu.js"></script>

<!--script admin-->
<script src="../assets/js/admin-script.js"></script>

</body>
</html>
