<!DOCTYPE html>
<html lang="en">

<head>
	
	<!-- Title -->
	<title>Resturant Menu Website</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="">
	{{-- <meta name="keywords" content="restaurant, restaurant website templates, restaurant template, food, restro, hotel, bootstrap 5, bootstrap, html, frontend, swigo, responsive template, shop, cart, menu, taste, blog, service, cook, customers, website, hungry, shop cart, fast food, table booking, website templates for restaurants, food website templates">
	<meta name="description" content="Boost your food business with Swigo's restaurant website templates. Our professionally designed templates cater specifically to the needs of restaurants, offering visually stunning and functional designs. Choose from a variety of food website templates that are perfect for showcasing your menu, promoting your services, and attracting hungry customers. Partner with DexignZone to create an impressive online presence for your restaurant. Start driving more traffic and growing your business today.">
	<meta property="og:title" content="Swigo - Empowering Your Restaurant Website Templates | DexignZone">
	<meta property="og:description" content="Boost your food business with Swigo's restaurant website templates. Our professionally designed templates cater specifically to the needs of restaurants, offering visually stunning and functional designs. Choose from a variety of food website templates that are perfect for showcasing your menu, promoting your services, and attracting hungry customers. Partner with DexignZone to create an impressive online presence for your restaurant. Start driving more traffic and growing your business today.">
	<meta property="og:image" content="social-home.png"> --}}
	<meta name="format-detection" content="telephone=no">
	
	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<!-- Favicon icon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    
	<!-- Stylesheet -->
	<link href="assets/vendor/animate/animate.css" rel="stylesheet">
    <link href="assets/vendor/magnific-popup/magnific-popup.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="assets/vendor/tempus-dominus/css/tempus-dominus.min.css" rel="stylesheet">
	
	<!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/vendor/rangeslider/rangeslider.css">
    <link rel="stylesheet" href="assets/vendor/switcher/switcher.css">
    <link rel="stylesheet" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" href="assets/css/skin/skin-1.css">
    
	<!-- Google Fonts -->
	<link rel="preconnect" href="../../fonts.googleapis.com/index.html">
	<link rel="preconnect" href="../../fonts.gstatic.com/index.html" crossorigin>
	<link href="../../fonts.googleapis.com/css21aea.css?family=Lobster&amp;family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&amp;family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
	
</head>
<body id="bg">
{{-- <div id="loading-area" class="loading-page-3">
	<img src="assets/images/loading.gif" alt="">
</div> --}}
<div class="page-wraper">
	
	<!-- Header -->
	<header class="site-header mo-left header header-transparent style-1">
		<!-- Main Header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix ">
				<div class="container clearfix">
					
					<!-- Website Logo -->
					<div class="logo-header mostion">
						<a href="{{ route('home')}}"><h1>Menus</h1></a>
						{{-- <a href="{{ route('home')}}" class="anim-logo"><img src="assets/images/logo.png" alt="Menu"></a> --}}
					</div>
					
					<!-- Nav Toggle Button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					
					<!-- EXTRA NAV -->
					<div class="extra-nav">
						<div class="extra-cell">
							<ul>
								<li>
									<a class="btn btn-white btn-square btn-shadow"  href="{{ route('login')}}" role="button" aria-controls="offcanvasLogin">
										<i class="flaticon-user"></i>
									</a>
								</li>
								<li>
									<button type="button" class="btn btn-white btn-square btn-shadow cart-btn">
										<i class="flaticon-shopping-bag-1"></i>
										<span class="badge">6</span>
									</button>
									<ul class="dropdown-menu cart-list">
										<li class="cart-item">
											<div class="media"> 
												<div class="media-left"> 
													<a href="product-detail.html"> 
														<img alt="/" class="media-object" src="assets/images/shop/pic2.jpg"> 
													</a> 
												</div> 
												<div class="media-body"> 
													<h6 class="dz-title"><a href="product-detail.html" class="media-heading">Double Burger</a></h6>
													<span class="dz-price">$28.00</span>
													<span class="item-close">&times;</span>
												</div> 
											</div>
										</li>
										<li class="cart-item">
											<div class="media"> 
												<div class="media-left"> 
													<a href="product-detail.html"> 
														<img alt="/" class="media-object" src="assets/images/shop/pic3.jpg"> 
													</a> 
												</div> 
												<div class="media-body"> 
													<h6 class="dz-title"><a href="product-detail.html" class="media-heading">Cheese Burger</a></h6>
													<span class="dz-price">$20.00</span>
													<span class="item-close">&times;</span>
												</div> 
											</div>
										</li>
										<li class="cart-item">
											<div class="media"> 
												<div class="media-left"> 
													<a href="product-detail.html"> 
														<img alt="/" class="media-object" src="assets/images/shop/pic4.jpg"> 
													</a> 
												</div> 
												<div class="media-body"> 
													<h6 class="dz-title"><a href="product-detail.html" class="media-heading">Burger</a></h6>
													<span class="dz-price">$15.00</span>
													<span class="item-close">&times;</span>
												</div> 
											</div>
										</li>
										<li class="cart-item text-center d-flex justify-content-between">
											<h6 class="text-primary mb-0">Total:</h6>
											<h6 class="text-primary mb-0">$63</h6>
										</li>
										<li class="text-center d-flex">
											<a href="shop-cart.html" class="btn btn-primary me-2 w-100 d-block btn-hover-1"><span>View Cart</span></a>
											<a href="our-menu-1.html" class="btn btn-outline-primary w-100 d-block btn-hover-1"><span>Menu</span></a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!-- EXTRA NAV -->
					
					<!-- Header Nav -->
					<div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
						<div class="logo-header">
							<a href="index.html" class="anim-logo"><img src="assets/images/logo.png" alt="/"></a>
						</div>
						<ul class="nav navbar-nav navbar">
							<li><a href="{{ route('home')}}">Home</a></li>
							<li class="has-mega-menu">
								<a href="javascript:void(0);">Menu</a>
								<ul class="mega-menu">
									<li><a href="javascript:;">Breakfast</a>
										<ul>
											<li><a href="{{ route('menus')}}">Item 1</a></li>
											<li><a href="{{ route('menus') }}">Item 2</a></li>
										</ul>
									</li>
									<li><a href="javascript:;">Lunch</a>
										<ul>
											<li><a href="{{ route('menus')}}">Item 1</a></li>
											<li><a href="{{ route('menus') }}">Item 2</a></li>
										</ul>
									</li>
									<li><a href="javascript:;">Dinner</a>
										<ul>
											<li><a href="{{ route('menus')}}">Item 1</a></li>
											<li><a href="{{ route('menus') }}">Item 2</a></li>
										</ul>
									</li>
									<li class="header-adv p-0"><img src="assets/images/adv-media.jpg" alt="/"></li>
								</ul>
							</li>
							
							<li><a href="{{ route('reservation')}}">Reservation</a></li>
							<li><a href="{{ route('about')}}">About Us</a></li>
							<li><a href="{{ route('contact-us')}}">Contact Us</a></li>
						</ul>
						<div class="dz-social-icon">
							<ul>
								<li><a target="_blank" class="fab fa-facebook-f" href="https://www.facebook.com/"></a></li>
								<li><a target="_blank" class="fab fa-twitter" href="https://twitter.com/"></a></li>
								<li><a target="_blank" class="fab fa-linkedin-in" href="https://www.linkedin.com/"></a></li>
								<li><a target="_blank" class="fab fa-instagram" href="https://www.instagram.com/"></a></li>
							</ul>
						</div>	
					</div>
					
				</div>
			</div>
		</div>
		<!-- Main Header End -->
	</header>
	<!-- Header -->