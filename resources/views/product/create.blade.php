<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bigdeal admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Bigdeal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/admin/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/admin/images/favicon/favicon.png" type="image/x-icon">
    <title>Menu</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/admin/css/font-awesome.css">
    
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/admin/css/themify-icons.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/admin/css/flag-icon.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/admin/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/admin/css/admin.css">
</head>
<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-left">
            <div class="logo-wrapper"><a href="{{ route('admin')}}"><h2>Menu</h2></a></div>
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
                        <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="../assets/admin/images/dashboard/man.png" alt="header-user">
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

    @include('layouts.admin_sidebar')

        
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
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/admin/images/dashboard/user.png" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Vincent Porter</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/admin/images/dashboard/user1.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Ain Chavez</div>
                                        <div class="status"> 28 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/admin/images/dashboard/user2.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Kori Thomas</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/admin/images/dashboard/user3.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Erica Hughes</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/admin/images/dashboard/man.png" alt="">
                                    <div class="status-circle offline"></div>
                                    <div class="about">
                                        <div class="name">Ginger Johnston</div>
                                        <div class="status"> 2 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/admin/images/dashboard/user5.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Prasanth Anand</div>
                                        <div class="status"> 2 hour ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/admin/images/dashboard/designer.jpg" alt="">
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
                                <h3>Add Products
                                    <small>Menu Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Physical</li>
                                <li class="breadcrumb-item active">Add Product</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Add Product</h5>
                            </div>
                            <div class="card-body">
                                <div class="row product-adding">
                                    <div class="col-xl-5">
                                        <div class="add-product">
                                            <div class="row">
                                                <div class="col-xl-9 xl-50 col-sm-6 col-9">
                                                    <img src="../assets/admin/images/pro3/1.jpg" alt="" class="img-fluid image_zoom_1 blur-up lazyloaded">
                                                </div>
                                                <div class="col-xl-3 xl-50 col-sm-6 col-3">
                                                    <ul class="file-upload-product">
                                                        <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                        <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                        <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                        <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                        <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                        <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7">
                                        <form class="needs-validation add-product-form" novalidate="">
                                            <div class="form">
                                                <div class="form-group mb-3  row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label for="validationCustom01" >Title :</label>    
                                                    </div>
                                                    <div class="col-xl-8 col-sm-7">
                                                        <input class="form-control " id="validationCustom01" type="text" required="">
                                                        <div class="valid-feedback">Looks good!</div>    
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label for="validationCustom02" >Price :</label>    
                                                    </div>
                                                    <div class="col-xl-8 col-sm-7">
                                                        <input class="form-control " id="validationCustom02" type="text" required="">
                                                        <div class="valid-feedback">Looks good!</div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label for="validationCustomUsername" >Product Code :</label>    
                                                    </div>
                                                    
                                                    <div class="col-xl-8 col-sm-7">
                                                        <input class="form-control " id="validationCustomUsername" type="text" required="">
                                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form">
                                                <div class="form-group row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label for="exampleFormControlSelect1" >Select Category :</label>    
                                                    </div>
                                                    <div class="col-xl-8 col-sm-7">
                                                        <select class="form-control digits " id="exampleFormControlSelect1">
                                                            <option>Cat 1 </option>
                                                            <option>Cat 2</option>
                                                            <option>Cat 3</option>
                                                            <option>Cat 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label for="exampleFormControlSelect1" >Select Size :</label>    
                                                    </div>
                                                    <div class="col-xl-8 col-sm-7">
                                                        <select class="form-control digits " id="exampleFormControlSelect1">
                                                            <option>Small</option>
                                                            <option>Medium</option>
                                                            <option>Large</option>
                                                            <option>Extra Large</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label>Total Products :</label>    
                                                    </div>
                                                    <div class="col-xl-9 col-xl-8 col-sm-7 pl-0">
                                                        <fieldset class="qty-box ">
                                                            <div class="input-group">
                                                                <input class="touchspin" type="text" value="1">
                                                            </div>
                                                        </fieldset>    
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-sm-4">Add Description :</label>
                                                    <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                                        <textarea id="editor1" name="editor1" cols="10" rows="4"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="offset-xl-3 offset-sm-4">
                                                <button type="submit" class="btn btn-primary">Add</button>
                                                <button type="button" class="btn btn-light">Discard</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <p class="pull-right mb-0">Made with love by <b>Zeeshan</b><i class="fa fa-heart"></i></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end-->

    </div>

</div>

<!-- latest jquery-->
<script src="../assets/admin/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="../assets/admin/js/popper.min.js"></script>
<script src="../assets/admin/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="../assets/admin/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/admin/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="../assets/admin/js/sidebar-menu.js"></script>

<!-- touchspin js-->
<script src="../assets/admin/js/touchspin/vendors.min.js"></script>
<script src="../assets/admin/js/touchspin/touchspin.js"></script>
<script src="../assets/admin/js/touchspin/input-groups.min.js"></script>

<!-- form validation js-->
<script src="../assets/admin/js/dashboard/form-validation-custom.js"></script>

<!-- ckeditor js-->
<script src="../assets/admin/js/editor/ckeditor/ckeditor.js"></script>
<script src="../assets/admin/js/editor/ckeditor/styles.js"></script>
<script src="../assets/admin/js/editor/ckeditor/adapters/jquery.js"></script>
<script src="../assets/admin/js/editor/ckeditor/ckeditor.custom.js"></script>

<!-- Zoom js-->
<script src="../assets/admin/js/jquery.elevatezoom.js"></script>
<script src="../assets/admin/js/zoom-scripts.js"></script>

<!--Customizer admin-->
<script src="../assets/admin/js/admin-customizer.js"></script>

<!-- lazyload js-->
<script src="../assets/admin/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="../assets/admin/js/chat-menu.js"></script>

<!--script admin-->
<script src="../assets/admin/js/admin-script.js"></script>

</body>
</html>
