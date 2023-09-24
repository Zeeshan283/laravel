@include('layouts.header_menu')

	<!-- Offcanvas Form Start -->
	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasLogin">
		<div class="offcanvas-body">
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			<div class="offcanvas-form">
				<div class="login-head">
					<h4 class="title">Welcome Back</h4>
					<p>We’d love have you join our 100% remote network of creatord & freelance.</p>
					<button name="submit" value="submit" type="submit" class="btn google-btn w-100 d-block">
						<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_1381_2836)">
						<path d="M5.76215 15.7122L4.85713 19.0908L1.54929 19.1607C0.560727 17.3272 0 15.2294 0 13.0001C0 10.8443 0.524266 8.81147 1.45356 7.02148H1.45427L4.39918 7.56139L5.68923 10.4886C5.41922 11.2758 5.27206 12.1208 5.27206 13.0001C5.27216 13.9543 5.44502 14.8687 5.76215 15.7122Z" fill="#FBBB00"/>
						<path d="M25.7722 10.5715C25.9215 11.3579 25.9994 12.1701 25.9994 13.0001C25.9994 13.9308 25.9015 14.8387 25.7151 15.7144C25.0823 18.6944 23.4287 21.2965 21.138 23.138L21.1373 23.1373L17.428 22.948L16.903 19.6708C18.423 18.7794 19.6109 17.3844 20.2366 15.7144H13.2852V10.5715H20.338H25.7722Z" fill="#518EF8"/>
						<path d="M21.1374 23.1371L21.1381 23.1378C18.9103 24.9285 16.0802 26 12.9995 26C8.04883 26 3.74456 23.2329 1.54883 19.1607L5.76169 15.7122C6.85953 18.6421 9.68596 20.7279 12.9995 20.7279C14.4238 20.7279 15.7581 20.3428 16.9031 19.6707L21.1374 23.1371Z" fill="#28B446"/>
						<path d="M21.2974 2.99284L17.086 6.44069C15.901 5.69999 14.5003 5.27211 12.9996 5.27211C9.61098 5.27211 6.73168 7.45352 5.68884 10.4886L1.45384 7.02142H1.45312C3.61671 2.85 7.97527 0 12.9996 0C16.1538 0 19.046 1.12359 21.2974 2.99284Z" fill="#F14336"/>
						</g>
						<defs>	
						<clipPath id="clip0_1382_2836">
						<rect width="26" height="26" fill="white"/>
						</clipPath>
						</defs>
						</svg> Sign Up with Google
					</button>
					<h6 class="login-title"><span>OR</span></h6>
				</div>
				<div class="form-group m-b15">
					<label class="form-label">Email*</label>
					<div class="input-group">
						<input name="dzEmail" required type="text" class="form-control" placeholder="Enter Your Email">
					</div>
				</div>
				<div class="form-group m-b30">
					<label class="form-label">Password*</label>
					<div class="input-group search-input">
						<input name="password" type="password" class="form-control dz-password" placeholder="Enter a Password">
						<div class="show-pass">
							<svg class="eye-close" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#8ea5c8"><path d="M11 17.188a8.71 8.71 0 0 1-1.576-.147.69.69 0 0 1-.579-.678.7.7 0 0 1 .817-.676 7.33 7.33 0 0 0 1.339.127c4.073 0 7.61-3.566 8.722-4.812a18.51 18.51 0 0 0-2.434-2.274.69.69 0 0 1 .335-1.226.69.69 0 0 1 .268.019c.087.024.169.064.24.12a18.79 18.79 0 0 1 3.036 2.939.69.69 0 0 1 0 .848c-.185.234-4.581 5.763-10.167 5.763zm7.361-13.549a.69.69 0 0 0-.972 0l-2.186 2.186a10.68 10.68 0 0 0-2.606-.864c-.527-.099-1.061-.149-1.597-.149-5.585 0-9.982 5.528-10.166 5.763a.69.69 0 0 0 0 .848c.897 1.09 1.915 2.075 3.033 2.936.529.415 1.083.796 1.66 1.142l-1.888 1.887c-.066.063-.118.139-.154.223a.69.69 0 0 0 .145.757.67.67 0 0 0 .226.15c.085.034.175.052.266.051a.69.69 0 0 0 .265-.056c.084-.036.16-.088.223-.154l13.75-13.75a.69.69 0 0 0 0-.972zm-13.65 9.636A18.51 18.51 0 0 1 2.278 11C3.39 9.754 6.927 6.187 11 6.187a7.31 7.31 0 0 1 1.348.127 8.92 8.92 0 0 1 1.814.55L12.895 8.13c-.661-.437-1.453-.632-2.241-.552a3.44 3.44 0 0 0-2.085.989c-.56.56-.91 1.297-.989 2.085a3.44 3.44 0 0 0 .552 2.241l-1.601 1.604a14.43 14.43 0 0 1-1.82-1.222zm4.432-1.392c-.134-.275-.204-.577-.206-.883a2.07 2.07 0 0 1 .6-1.456 2.12 2.12 0 0 1 2.338-.392l-2.731 2.731z"></path></svg>
							<svg class="eye-open" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#8ea5c8"><path d="M19.873 9.611c-.179-.244-4.436-5.985-9.873-5.985S.305 9.367.127 9.611a.66.66 0 0 0 0 .778c.178.244 4.436 5.985 9.873 5.985s9.694-5.74 9.873-5.984a.66.66 0 0 0 0-.778zM10 15.055c-4.005 0-7.474-3.81-8.501-5.055C2.525 8.753 5.986 4.945 10 4.945c4.005 0 7.473 3.809 8.501 5.055-1.025 1.247-4.487 5.054-8.501 5.054zm0-9.011A3.96 3.96 0 0 0 6.044 10 3.96 3.96 0 0 0 10 13.956 3.96 3.96 0 0 0 13.956 10 3.96 3.96 0 0 0 10 6.044zm0 6.593A2.64 2.64 0 0 1 7.363 10 2.64 2.64 0 0 1 10 7.363 2.64 2.64 0 0 1 12.637 10 2.64 2.64 0 0 1 10 12.637z"></path></svg>
						</div>
					</div>
				</div>
				<button name="submit" value="submit" type="submit" class="btn btn-primary w-100 d-block btn-hover-2"><span>Sign In</span></button>
				<p class="text-center m-t30">Not registered?  
					<a class="register text-primary font-weight-500" data-bs-toggle="offcanvas" href="#offcanvasRegister" role="button" aria-controls="offcanvasRegister">Register here</a>
				</p>
			</div>
		</div>
	</div>
	
	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRegister">
		<div class="offcanvas-body">
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			<div class="offcanvas-form">
				<div class="login-head">
					<h4 class="title">Join Our Network</h4>
					<p>We’d love have you join our 100% remote network of creatord & freelance.</p>
					<button name="submit" value="submit" type="submit" class="btn google-btn w-100 d-block">
						<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_1383_2836)">
						<path d="M5.76215 15.7122L4.85713 19.0908L1.54929 19.1607C0.560727 17.3272 0 15.2294 0 13.0001C0 10.8443 0.524266 8.81147 1.45356 7.02148H1.45427L4.39918 7.56139L5.68923 10.4886C5.41922 11.2758 5.27206 12.1208 5.27206 13.0001C5.27216 13.9543 5.44502 14.8687 5.76215 15.7122Z" fill="#FBBB00"/>
						<path d="M25.7722 10.5715C25.9215 11.3579 25.9994 12.1701 25.9994 13.0001C25.9994 13.9308 25.9015 14.8387 25.7151 15.7144C25.0823 18.6944 23.4287 21.2965 21.138 23.138L21.1373 23.1373L17.428 22.948L16.903 19.6708C18.423 18.7794 19.6109 17.3844 20.2366 15.7144H13.2852V10.5715H20.338H25.7722Z" fill="#518EF8"/>
						<path d="M21.1374 23.1371L21.1381 23.1378C18.9103 24.9285 16.0802 26 12.9995 26C8.04883 26 3.74456 23.2329 1.54883 19.1607L5.76169 15.7122C6.85953 18.6421 9.68596 20.7279 12.9995 20.7279C14.4238 20.7279 15.7581 20.3428 16.9031 19.6707L21.1374 23.1371Z" fill="#28B446"/>
						<path d="M21.2974 2.99284L17.086 6.44069C15.901 5.69999 14.5003 5.27211 12.9996 5.27211C9.61098 5.27211 6.73168 7.45352 5.68884 10.4886L1.45384 7.02142H1.45312C3.61671 2.85 7.97527 0 12.9996 0C16.1538 0 19.046 1.12359 21.2974 2.99284Z" fill="#F14336"/>
						</g>
						<defs>
						<clipPath id="clip0_138_536">
						<rect width="26" height="26" fill="white"/>
						</clipPath>
						</defs>
						</svg> Sign Up with Google
					</button>
					<h6 class="login-title"><span>OR</span></h6>
				</div>
				<div class="form-group m-b15">
					<label class="form-label">Name*</label>
					<div class="input-group">
						<input name="dzName" required type="text" class="form-control" placeholder="Enter Your Name">
					</div>
				</div>
				<div class="form-group m-b15">
					<label class="form-label">Email*</label>
					<div class="input-group">
						<input name="dzEmail" required type="text" class="form-control" placeholder="Enter Your Email">
					</div>
				</div>
				<div class="form-group m-b30">
					<label class="form-label">Password*</label>
					<div class="input-group search-input">
						<input name="password" type="password" class="form-control dz-password" placeholder="Create a Password">
						<div class="show-pass">
							<svg class="eye-close" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#8ea5c8"><path d="M11 17.188a8.71 8.71 0 0 1-1.576-.147.69.69 0 0 1-.579-.678.7.7 0 0 1 .817-.676 7.33 7.33 0 0 0 1.339.127c4.073 0 7.61-3.566 8.722-4.812a18.51 18.51 0 0 0-2.434-2.274.69.69 0 0 1 .335-1.226.69.69 0 0 1 .268.019c.087.024.169.064.24.12a18.79 18.79 0 0 1 3.036 2.939.69.69 0 0 1 0 .848c-.185.234-4.581 5.763-10.167 5.763zm7.361-13.549a.69.69 0 0 0-.972 0l-2.186 2.186a10.68 10.68 0 0 0-2.606-.864c-.527-.099-1.061-.149-1.597-.149-5.585 0-9.982 5.528-10.166 5.763a.69.69 0 0 0 0 .848c.897 1.09 1.915 2.075 3.033 2.936.529.415 1.083.796 1.66 1.142l-1.888 1.887c-.066.063-.118.139-.154.223a.69.69 0 0 0 .145.757.67.67 0 0 0 .226.15c.085.034.175.052.266.051a.69.69 0 0 0 .265-.056c.084-.036.16-.088.223-.154l13.75-13.75a.69.69 0 0 0 0-.972zm-13.65 9.636A18.51 18.51 0 0 1 2.278 11C3.39 9.754 6.927 6.187 11 6.187a7.31 7.31 0 0 1 1.348.127 8.92 8.92 0 0 1 1.814.55L12.895 8.13c-.661-.437-1.453-.632-2.241-.552a3.44 3.44 0 0 0-2.085.989c-.56.56-.91 1.297-.989 2.085a3.44 3.44 0 0 0 .552 2.241l-1.601 1.604a14.43 14.43 0 0 1-1.82-1.222zm4.432-1.392c-.134-.275-.204-.577-.206-.883a2.07 2.07 0 0 1 .6-1.456 2.12 2.12 0 0 1 2.338-.392l-2.731 2.731z"></path></svg>
							<svg class="eye-open" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#8ea5c8"><path d="M19.873 9.611c-.179-.244-4.436-5.985-9.873-5.985S.305 9.367.127 9.611a.66.66 0 0 0 0 .778c.178.244 4.436 5.985 9.873 5.985s9.694-5.74 9.873-5.984a.66.66 0 0 0 0-.778zM10 15.055c-4.005 0-7.474-3.81-8.501-5.055C2.525 8.753 5.986 4.945 10 4.945c4.005 0 7.473 3.809 8.501 5.055-1.025 1.247-4.487 5.054-8.501 5.054zm0-9.011A3.96 3.96 0 0 0 6.044 10 3.96 3.96 0 0 0 10 13.956 3.96 3.96 0 0 0 13.956 10 3.96 3.96 0 0 0 10 6.044zm0 6.593A2.64 2.64 0 0 1 7.363 10 2.64 2.64 0 0 1 10 7.363 2.64 2.64 0 0 1 12.637 10 2.64 2.64 0 0 1 10 12.637z"></path></svg>
						</div>
					</div>
				</div>
				<button name="submit" value="submit" type="submit" class="btn btn-primary w-100 d-block btn-hover-2">
					<span>Sign Up</span>
				</button>
				<p class="text-center m-t30">Already have an account?
					<a class="text-primary font-weight-500" data-bs-toggle="offcanvas" href="#offcanvasLogin" role="button" aria-controls="offcanvasLogin" >Login</a>
				</p>
			</div>
		</div>
	</div>
	<!-- Offcanvas Form End -->
	
	<div class="page-content bg-white">
	
		{{-- slider here --}}

		<div class="main-bnr-one">
				<div class="slider-pagination">
					{{-- <div class="main-button-prev"><i class="icon-arrow-up"></i></div>
					<div class="main-slider-pagination"></div>
					<div class="main-button-next"><i class="icon-arrow-down"></i></div> --}}
					
				</div>
				
				<div class="main-slider-1 swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="banner-inner">
								<div class="container">
									<div class="row align-items-center">
										<div class="col-xl-7 col-lg-7 col-md-7">
											<div class="banner-content">
												<span class="sub-title wow fadeInUp" data-wow-delay="0.2s">High Quality Test Station </span>
												<h1 class="title  wow fadeInUp" data-wow-delay="0.4s">Choosing The<br> Best <span class="text-primary">Quality Food</span></h1>
												<p class="wow fadeInUp" data-wow-delay="0.6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												{{-- <div class="banner-btn d-flex align-items-center wow fadeInUp" data-wow-delay="0.8s">
													<a href="{{ route('reservation')}}" class="btn btn-primary btn-md shadow-primary m-r30 btn-hover-1"><span>Book a Table</span></a>
													<a href="#" class="btn btn-outline-primary btn-md shadow-primary btn-hover-1"><span>Create Menu</span></a>
												</div> --}}
											</div>
										</div>
										<div class="col-xl-5 col-lg-5 col-md-5">
											<div class="banner-media wow fadeInRight" data-wow-delay="1s">
												<img src="assets/images/main-slider/slider1/pic1.png" alt="/">
											</div>
										</div>
									</div>
								</div>
								<img src="assets/images/main-slider/slider1/img3.png" class="img1" alt="/">
								<img src="assets/images/main-slider/slider1/img1.png" class="img2" alt="Hello">
								<img src="assets/images/main-slider/slider1/img2.png" class="img3" alt="/">
							</div>
						</div>
						<div class="swiper-slide">
							<div class="banner-inner">
								<div class="container">
									<div class="row align-items-center">
										<div class="col-xl-7 col-lg-7 col-md-7">
											<div class="banner-content">
												<span class="sub-title wow fadeInUp" data-wow-delay="0.2s">The Best Food Stations</span>
												<h1 class="title wow fadeInUp" data-wow-delay="0.4s">Where Food <br> Meets<span class="text-primary"> Best Passion</span></h1>
												<p class="wow fadeInUp" data-wow-delay="0.6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												{{-- <div class="banner-btn d-flex align-items-center wow fadeInUp" data-wow-delay="0.8s">
													<a href="{{ route('reservation')}}" class="btn btn-primary btn-md shadow-primary m-r30 btn-hover-1"><span>Book a Table</span></a>
													<a href="#" class="btn btn-outline-primary btn-md shadow-primary btn-hover-1"><span>Create Menu</span></a>
												</div> --}}
											</div>
										</div>
										<div class="col-xl-5 col-lg-5 col-md-5">
											<div class="banner-media wow fadeInRight" data-wow-delay="1s">
												<img src="assets/images/main-slider/slider1/pic1.png" alt="/">
											</div>
										</div>
									</div>
								</div>
								<img src="assets/images/main-slider/slider1/img3.png" class="img1" alt="/">
								<img src="assets/images/main-slider/slider1/img1.png" class="img2" alt="/">
								<img src="assets/images/main-slider/slider1/img2.png" class="img3" alt="/">
							</div>
						</div>
						<div class="swiper-slide">
							<div class="banner-inner">
								<div class="container">
									<div class="row align-items-center">
										<div class="col-xl-7 col-lg-7 col-md-7">
											<div class="banner-content">
												<span class="sub-title wow fadeInUp" data-wow-delay="0.2s">Exploring the Delicious World</span>
												<h1 class="title wow fadeInUp" data-wow-delay="0.4s">Delicious Eats <br> And  <span class="text-primary">Tasty Drinks</span></h1>
												<p class="wow fadeInUp" data-wow-delay="0.6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
												{{-- <div class="banner-btn d-flex align-items-center wow fadeInUp" data-wow-delay="0.8s">
													<a href="{{ route('reservation')}}" class="btn btn-primary btn-md shadow-primary m-r30 btn-hover-1"><span>Book a Table</span></a>
													<a href="#" class="btn btn-outline-primary btn-md shadow-primary btn-hover-1"><span>Create Menu</span></a>
												</div> --}}
											</div>
										</div>
										<div class="col-xl-5 col-lg-5 col-md-5">
											<div class="banner-media wow fadeInRight" data-wow-delay="1s">
												<img src="assets/images/main-slider/slider1/pic1.png" alt="/">
											</div>
										</div>
									</div>
								</div>
								<img src="assets/images/main-slider/slider1/img3.png" class="img1" alt="/">
								<img src="assets/images/main-slider/slider1/img1.png" class="img2" alt="/">
								<img src="assets/images/main-slider/slider1/img2.png" class="img3" alt="/">
							</div>
						</div>
					</div>
				</div>
				
			<div class="container">
				<div class="main-thumb1-area swiper-btn-lr wow fadeInUp" data-wow-delay="0.6s">
					<div class="swiper main-thumb1">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="food-card">
									<div class="dz-media">
										<img src="assets/images/main-slider/slider1/thumb/pic1.jpg" alt="/">									
									</div>
									<div class="dz-content">
										<h5 class="title">BreakFast</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="food-card">
									<div class="dz-media">
										<img src="assets/images/main-slider/slider1/thumb/pic2.jpg" alt="/">									
									</div>
									<div class="dz-content">
										<h5 class="title">Lunch</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="food-card">
									<div class="dz-media">
										<img src="assets/images/main-slider/slider1/thumb/pic3.jpg" alt="/">									
									</div>
									<div class="dz-content">
										<h5 class="title">Dinner</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="thumb-button-prev btn-prev-1"><i class="fa-solid fa-angle-left"></i></div>
					<div class="thumb-button-next btn-next-1"><i class="fa-solid fa-angle-right"></i></div>
				</div>
			</div>
		</div>	
		{{-- slider ends here  --}}
		{{-- tesitng  --}}
		
		{{-- testing ends here --}}
		<!-- Our Menu-->
			<div class="container">

				{{-- carasol testing  --}}

			<section class="content-inner-1 pt-5">
				<div class="container">			
					<div class="section-head text-center">
						<h2 class="title">Special Menu</h2>
					</div>
					<div class="swiper-btn-lr">
						<div class="swiper portfolio-swiper">
							<div class="swiper-wrapper p-b5">
								<div class="swiper-slide">
									<div class="dz-img-box style-2">
										<div class="dz-media">
											<img src="assets/images/gallery/small/pic1.jpg" alt="/">
										</div>
										<div class="dz-content">
											<h4 class="dz-title"><a href="product-detail.html">Pizza</a></h4>
											<p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
											<h5 class="dz-price text-primary">$55.00</h5>
											<a href="shop-cart.html" class="btn btn-primary btn-hover-2"> Add To Cart</a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="dz-img-box style-2">
										<div class="dz-media">
											<img src="assets/images/gallery/small/pic2.jpg" alt="/">
										</div>
										<div class="dz-content">
											<h4 class="dz-title"><a href="product-detail.html">Rice</a></h4>
											<p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
											<h5 class="dz-price text-primary">$50.00</h5>
											<a href="shop-cart.html" class="btn btn-primary btn-hover-2"> Add To Cart</a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="dz-img-box style-2">
										<div class="dz-media">
											<img src="assets/images/gallery/small/pic3.jpg" alt="/">
										</div>
										<div class="dz-content">
											<h4 class="dz-title"><a href="product-detail.html">Green Salad</a></h4>
											<p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
											<h5 class="dz-price text-primary">$45.00</h5>
											<a href="shop-cart.html" class="btn btn-primary btn-hover-2"> Add To Cart</a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="dz-img-box style-2">
										<div class="dz-media">
											<img src="assets/images/gallery/small/pic4.jpg" alt="/">
										</div>
										<div class="dz-content">
											<h4 class="dz-title"><a href="product-detail.html">Pasta</a></h4>
											<p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
											<h5 class="dz-price text-primary">$35.00</h5>
											<a href="shop-cart.html" class="btn btn-primary btn-hover-2"> Add To Cart</a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="dz-img-box style-2">
										<div class="dz-media">
											<img src="assets/images/gallery/small/pic1.jpg" alt="/">
										</div>
										<div class="dz-content">
											<h4 class="dz-title"><a href="product-detail.html">Pizza</a></h4>
											<p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
											<h5 class="dz-price text-primary">$55.00</h5>
											<a href="shop-cart.html" class="btn btn-primary btn-hover-2"> Add To Cart</a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="dz-img-box style-2">
										<div class="dz-media">
											<img src="assets/images/gallery/small/pic2.jpg" alt="/">
										</div>
										<div class="dz-content">
											<h4 class="dz-title"><a href="product-detail.html">Rice</a></h4>
											<p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
											<h5 class="dz-price text-primary">$50.00</h5>
											<a href="shop-cart.html" class="btn btn-primary btn-hover-2"> Add To Cart</a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="dz-img-box style-2">
										<div class="dz-media">
											<img src="assets/images/gallery/small/pic3.jpg" alt="/">
										</div>
										<div class="dz-content">
											<h4 class="dz-title"><a href="product-detail.html">Green Salad</a></h4>
											<p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
											<h5 class="dz-price text-primary">$45.00</h5>
											<a href="shop-cart.html" class="btn btn-primary btn-hover-2"> Add To Cart</a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="dz-img-box style-2">
										<div class="dz-media">
											<img src="assets/images/gallery/small/pic4.jpg" alt="/">
										</div>
										<div class="dz-content">
											<h4 class="dz-title"><a href="product-detail.html">Pasta</a></h4>
											<p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
											<h5 class="dz-price text-primary">$35.00</h5>
											<a href="shop-cart.html" class="btn btn-primary btn-hover-2"> Add To Cart</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="pagination mt-xl-0 m-t40">
							<div class="img-button-prev btn-prev-long"><i class="fa-solid fa-arrow-left"></i></div>
							<div class="img-button-next btn-next-long"><i class="fa-solid fa-arrow-right"></i></div>
						</div>
					</div>
				</div>
			</section>

			{{-- contact  --}}

				
		<div class="row inner-section-wrapper align-items-center pt-1">
			<div class="col-lg-3 col-sm-6 pt-1">
				<div class="icon-bx-wraper style-5 hover-aware box-hover pt-1">
					<div class="icon-bx"> 
						<div class="icon-cell">
							<i class="flaticon-placeholder"></i>
						</div>
					</div>
					<div class="icon-content">
						<h5 class="title">Location</h5>
						<p>ABC abc <br>abc</p>
						<div class="effect bg-primary"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="icon-bx-wraper style-5 hover-aware box-hover">
					<div class="icon-bx"> 
						<div class="icon-cell">
							<i class="flaticon-telephone"></i>
						</div>
					</div>
					<div class="icon-content">
						<h5 class="title">Phone Number</h5>
						<p>+92 123 456 789 <br>+92 123 456 789</p>
						<div class="effect bg-primary"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="icon-bx-wraper style-5 hover-aware box-hover">
					<div class="icon-bx "> 
						<div class="icon-cell">
							<i class="flaticon-email-1"></i>
						</div>
					</div>
					<div class="icon-content">
						<h5 class="title">Email Address</h5>
						<p>Info@gmail.com <br>Info@gmail.com</p>
						<div class="effect bg-primary"></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="icon-bx-wraper style-5 hover-aware box-hover">
					<div class="icon-bx "> 
						<div class="icon-cell">
							<i class="flaticon-clock-1"></i>
						</div>
					</div>
					<div class="icon-content">
						<h5 class="title">Open & Closing</h5>
						<p>Mon - Fri: 09:00am <br>to  07.00pm </p>
						<div class="effect bg-primary"></div>
					</div>
				</div>
			</div>
		</div>
		{{-- contact end  --}}

				

				
				{{-- carasol testing end  --}}
				<div class="row">
					<div class="col-xl-10 col-lg-9 col-md-12">
						<div class="site-filters style-1 clearfix">
							<ul class="filters" data-bs-toggle="buttons">
								<li data-filter=".All" class="btn active"><a href="javascript:void(0);"><span><i class="flaticon-fast-food"></i></span>ALL</a></li>
								<li data-filter=".drink" class="btn"><a href="javascript:void(0);"><span><i class="flaticon-cocktail"></i></span>COLD DRINK</a></li>
								<li data-filter=".pizza" class="btn"><a href="javascript:void(0);"><span><i class="flaticon-pizza-slice"></i></span>PIZZA</a></li>
								<li data-filter=".salad" class="btn"><a href="javascript:void(0);"><span><i class="flaticon-salad"></i></span>SALAD</a></li>
								<li data-filter=".sweet" class="btn"><a href="javascript:void(0);"><span><i class="flaticon-cupcake"></i></span>SWEETS</a></li>
								<li data-filter=".spicy" class="btn"><a href="javascript:void(0);"><span><i class="flaticon-chili-pepper"></i></span>SPICY</a></li>
								<li data-filter=".burger" class="btn"><a href="javascript:void(0);"><span><i class="flaticon-hamburger-1"></i></span>BURGER</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-12 text-lg-end mb-lg-0 m-b30 d-flex d-lg-block align-items-center justify-content-between">
						<strong class="filter-item-show d-lg-none">51,740 items</strong>
						<a data-bs-toggle="offcanvas" href="#offcanvasFilter" role="button" aria-controls="offcanvasFilter" class="btn btn-primary filter-btn btn-hover-2">
							Filter <span><i class="icon-filter m-l5"></i></span>
						</a>
					</div>
					<div class="offcanvas offcanvas-end filter-category-sidebar" tabindex="-1" id="offcanvasFilter" >
						<button type="button" class="btn-close style-1" data-bs-dismiss="offcanvas" aria-label="Close"><i class="la la-close"></i></button>
						<div class="offcanvas-body">
							<div class="widget">
								<div class="widget-title">
									<h4 class="title">Refine By Categories</h4>
								</div>
                                <div class="category-check-list">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-01">
										<label class="form-check-label" for="productCheckBox-01">
											Pizza
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-02">
										<label class="form-check-label" for="productCheckBox-02">
											Hamburger
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-03">
										<label class="form-check-label" for="productCheckBox-03">
											Cold Drink
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-04">
										<label class="form-check-label" for="productCheckBox-04">
											Sandwich
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-05">
										<label class="form-check-label" for="productCheckBox-05">
											Muffin
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-06">
										<label class="form-check-label" for="productCheckBox-06">
											Burrito
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-07">
										<label class="form-check-label" for="productCheckBox-07">
											Taco
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-08">
										<label class="form-check-label" for="productCheckBox-08">
											Hot Dog
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-09">
										<label class="form-check-label" for="productCheckBox-09">
											Noodles
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-10">
										<label class="form-check-label" for="productCheckBox-10">
											Macrony
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-11">
										<label class="form-check-label" for="productCheckBox-11">
											Cheese Pasta
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-12">
										<label class="form-check-label" for="productCheckBox-12">
											Fish Fry
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-13">
										<label class="form-check-label" for="productCheckBox-13">
											Cold Coffee
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-14">
										<label class="form-check-label" for="productCheckBox-14">
											Manchurian
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-15">
										<label class="form-check-label" for="productCheckBox-15">
											Dosa
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-16">
										<label class="form-check-label" for="productCheckBox-16">
											Momos
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-17">
										<label class="form-check-label" for="productCheckBox-17">
											Soup
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-18">
										<label class="form-check-label" for="productCheckBox-18">
											Chicken Burger
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-19">
										<label class="form-check-label" for="productCheckBox-19">
											Beverages
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="productCheckBox-20">
										<label class="form-check-label" for="productCheckBox-20">
											Lemon Lime Soda
										</label>
									</div>
								</div>
                            </div>
							<div class="widget">
								<div class="widget-title">
									<h4 class="title">Near Me</h4>
								</div>
                                <div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="productCheckBox-21">
									<label class="form-check-label" for="productCheckBox-21">
										Ortus Restaurant
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="productCheckBox-22">
									<label class="form-check-label" for="productCheckBox-22">
										Amar Punjabi Restaurant
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="productCheckBox-23">
									<label class="form-check-label" for="productCheckBox-23">
										Other
									</label>
								</div>
                            </div>
							<div class="widget rating-filter">
								<div class="widget-title">
									<h4 class="title">Rating</h4>
								</div>
                                <ul>
									<li><span>5 Star</span></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
								</ul>
								<ul>
									<li><span>4 Star</span></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
								</ul>
								<ul>
									<li><span>3 Star</span></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
								</ul>
								<ul>
									<li><span>2 Star</span></li>
									<li><i class="icon-star-on"></i></li>
									<li><i class="icon-star-on"></i></li>
								</ul>
								<ul>
									<li><span>1 Star</span></li>
									<li><i class="icon-star-on"></i></li>
								</ul>
                            </div>
							<div class="widget">
								<div class="widget-title">
									<h4 class="title">Price Range</h4>
								</div>
								<div class="range-slider style-1">
									<div id="slider-tooltips"></div>
								</div>
                            </div>
						</div>
					</div>
				</div>

				<ul id="masonry" class="row">
					<li class="card-container col-xl-3 col-lg-4 col-md-9 m-b30 All drink pizza burger">
						<div class="dz-img-box style-4 box-hover">
							<div class="menu-detail">
								<div class="dz-media">
									<img src="assets/images/menu-small/pic1.png" alt="/">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{ route('p_details')}}">Burger</a></h5>
									<p>Delicious and Spicy</p>
								</div>
							</div>
							<div class="menu-footer">
								<span>Regular Price</span>
								<h5 class="price">$10.00</h5>
							</div>
							<a class="detail-btn" href="{{ route('p_details')}}"><i class="fa-solid fa-plus"></i></a>
						</div>
					</li>
					<li class="card-container col-xl-3 col-lg-4 col-md-6 m-b30 All pizza sweet">
						<div class="dz-img-box style-4 box-hover">
							<div class="menu-detail">
								<div class="dz-media">
									<img src="assets/images/menu-small/pic2.png" alt="/">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{ route('p_details')}}">Hot Rice</a></h5>
									<p>Delicious and Spicy</p>
								</div>
							</div>
							<div class="menu-footer">
								<span>Regular Price</span>
								<h5 class="price">$15.00</h5>
							</div>
							<a class="detail-btn" href="{{ route('p_details')}}"><i class="fa-solid fa-plus"></i></a>
						</div>
					</li>
					<li class="card-container col-xl-3 col-lg-4 col-md-6 m-b30 All salad spicy burger">
						<div class="dz-img-box style-4 box-hover">
							<div class="menu-detail">
								<div class="dz-media">
									<img src="assets/images/menu-small/pic3.png" alt="/">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{ route('p_details')}}">Momos</a></h5>
									<p>Delicious and Spicy</p>
								</div>
							</div>
							<div class="menu-footer">
								<span>Regular Price</span>
								<h5 class="price">$25.00</h5>
							</div>
							<a class="detail-btn" href="{{ route('p_details')}}"><i class="fa-solid fa-plus"></i></a>
						</div>
					</li>
					<li class="card-container col-xl-3 col-lg-4 col-md-6 m-b30 All drink sweet">
						<div class="dz-img-box style-4 box-hover">
							<div class="menu-detail">
								<div class="dz-media">
									<img src="assets/images/menu-small/pic4.png" alt="/">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{ route('p_details')}}">Pasta</a></h5>
									<p>Delicious and Spicy</p>
								</div>
							</div>
							<div class="menu-footer">
								<span>Regular Price</span>
								<h5 class="price">$45.00</h5>
							</div>
							<a class="detail-btn" href="{{ route('p_details')}}"><i class="fa-solid fa-plus"></i></a>
						</div>
					</li>
					<li class="card-container col-xl-3 col-lg-4 col-md-6 m-b30 All pizza spicy burger">
						<div class="dz-img-box style-4 box-hover">
							<div class="menu-detail">
								<div class="dz-media">
									<img src="assets/images/menu-small/pic5.png" alt="/">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{ route('p_details')}}">Panner</a></h5>
									<p>Delicious and Spicy</p>
								</div>
							</div>
							<div class="menu-footer">
								<span>Regular Price</span>
								<h5 class="price">$20.00</h5>
							</div>
							<a class="detail-btn" href="{{ route('p_details')}}"><i class="fa-solid fa-plus"></i></a>
						</div>
					</li>
					<li class="card-container col-xl-3 col-lg-4 col-md-6 m-b30 All salad sweet burger">
						<div class="dz-img-box style-4 box-hover">
							<div class="menu-detail">
								<div class="dz-media">
									<img src="assets/images/menu-small/pic6.png" alt="/">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{ route('p_details')}}">Soya Rice</a></h5>
									<p>Delicious and Spicy</p>
								</div>
							</div>
							<div class="menu-footer">
								<span>Regular Price</span>
								<h5 class="price">$90.00</h5>
							</div>
							<a class="detail-btn" href="{{ route('p_details')}}"><i class="fa-solid fa-plus"></i></a>
						</div>
					</li>
					<li class="card-container col-xl-3 col-lg-4 col-md-6 m-b30 All drink burger">
						<div class="dz-img-box style-4 box-hover">
							<div class="menu-detail">
								<div class="dz-media">
									<img src="assets/images/menu-small/pic7.png" alt="/">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{ route('p_details')}}">Potato Stick</a></h5>
									<p>Delicious and Spicy</p>
								</div>
							</div>
							<div class="menu-footer">
								<span>Regular Price</span>
								<h5 class="price">$20.00</h5>
							</div>
							<a class="detail-btn" href="our-menu-1.html"><i class="fa-solid fa-plus"></i></a>
						</div>
					</li>
					<li class="card-container col-xl-3 col-lg-4 col-md-6 m-b30 All pizza salad">
						<div class="dz-img-box style-4 box-hover">
							<div class="menu-detail">
								<div class="dz-media">
									<img src="assets/images/menu-small/pic8.png" alt="/">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{ route('p_details')}}">Salad</a></h5>
									<p>Delicious and Spicy</p>
								</div>
							</div>
							<div class="menu-footer">
								<span>Regular Price</span>
								<h5 class="price">$05.00</h5>
							</div>
							<a class="detail-btn" href="our-menu-1.html"><i class="fa-solid fa-plus"></i></a>
						</div>
					</li>
					<li class="card-container col-xl-3 col-lg-4 col-md-6 m-b30 All drink spicy">
						<div class="dz-img-box style-4 box-hover">
							<div class="menu-detail">
								<div class="dz-media">
									<img src="assets/images/menu-small/pic9.png" alt="/">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{ route('p_details')}}">Veg Soup</a></h5>
									<p>Delicious and Spicy</p>
								</div>
							</div>
							<div class="menu-footer">
								<span>Regular Price</span>
								<h5 class="price">$82.00</h5>
							</div>
							<a class="detail-btn" href="our-menu-1.html"><i class="fa-solid fa-plus"></i></a>
						</div>
					</li>
					<li class="card-container col-xl-3 col-lg-4 col-md-6 m-b30 All pizza burger">
						<div class="dz-img-box style-4 box-hover">
							<div class="menu-detail">
								<div class="dz-media">
									<img src="assets/images/menu-small/pic10.png" alt="/">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{ route('p_details')}}">Hot Rice</a></h5>
									<p>Delicious and Spicy</p>
								</div>
							</div>
							<div class="menu-footer">
								<span>Regular Price</span>
								<h5 class="price">$16.00</h5>
							</div>
							<a class="detail-btn" href="our-menu-1.html"><i class="fa-solid fa-plus"></i></a>
						</div>
					</li>
					<li class="card-container col-xl-3 col-lg-4 col-md-6 m-b30 All drink spicy burger">
						<div class="dz-img-box style-4 box-hover">
							<div class="menu-detail">
								<div class="dz-media">
									<img src="assets/images/menu-small/pic11.png" alt="/">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{ route('p_details')}}">Noodles</a></h5>
									<p>Delicious and Spicy</p>
								</div>
							</div>
							<div class="menu-footer">
								<span>Regular Price</span>
								<h5 class="price">$22.00</h5>
							</div>
							<a class="detail-btn" href="our-menu-1.html"><i class="fa-solid fa-plus"></i></a>
						</div>
					</li>
					<li class="card-container col-xl-3 col-lg-4 col-md-6 m-b30 All salad pizza sweet">
						<div class="dz-img-box style-4 box-hover">
							<div class="menu-detail">
								<div class="dz-media">
									<img src="assets/images/menu-small/pic12.png" alt="/">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{ route('p_details')}}">Fish Fry</a></h5>
									<p>Delicious and Spicy</p>
								</div>
							</div>
							<div class="menu-footer">
								<span>Regular Price</span>
								<h5 class="price">$90.00</h5>
							</div>
							<a class="detail-btn" href="our-menu-1.html"><i class="fa-solid fa-plus"></i></a>
						</div>
					</li>
					<li class="card-container col-xl-3 col-lg-4 col-md-6 m-b30 All spicy burger">
						<div class="dz-img-box style-4 box-hover">
							<div class="menu-detail">
								<div class="dz-media">
									<img src="assets/images/menu-small/pic13.png" alt="/">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{ route('p_details')}}">Aloo tikki</a></h5>
									<p>Delicious and Spicy</p>
								</div>
							</div>
							<div class="menu-footer">
								<span>Regular Price</span>
								<h5 class="price">$20.00</h5>
							</div>
							<a class="detail-btn" href="our-menu-1.html"><i class="fa-solid fa-plus"></i></a>
						</div>
					</li>
					<li class="card-container col-xl-3 col-lg-4 col-md-6 m-b30 All pizza sweet">
						<div class="dz-img-box style-4 box-hover">
							<div class="menu-detail">
								<div class="dz-media">
									<img src="assets/images/menu-small/pic14.png" alt="/">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{ route('p_details')}}">Soya Rice</a></h5>
									<p>Delicious and Spicy</p>
								</div>
							</div>
							<div class="menu-footer">
								<span>Regular Price</span>
								<h5 class="price">$90.00</h5>
							</div>
							<a class="detail-btn" href="our-menu-1.html"><i class="fa-solid fa-plus"></i></a>
						</div>
					</li>
					<li class="card-container col-xl-3 col-lg-4 col-md-6 m-b30 All salad sweet">
						<div class="dz-img-box style-4 box-hover">
							<div class="menu-detail">
								<div class="dz-media">
									<img src="assets/images/menu-small/pic15.png" alt="/">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{ route('p_details')}}">Pizza</a></h5>
									<p>Delicious and Spicy</p>
								</div>
							</div>
							<div class="menu-footer">
								<span>Regular Price</span>
								<h5 class="price">$35.00</h5>
							</div>
							<a class="detail-btn" href="our-menu-1.html"><i class="fa-solid fa-plus"></i></a>
						</div>
					</li>
					<li class="card-container col-xl-3 col-lg-4 col-md-6 m-b30 All pizza burger">
						<div class="dz-img-box style-4 box-hover">
							<div class="menu-detail">
								<div class="dz-media">
									<img src="assets/images/menu-small/pic8.png" alt="/">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{ route('p_details')}}">Salad</a></h5>
									<p>Delicious and Spicy</p>
								</div>
							</div>
							<div class="menu-footer">
								<span>Regular Price</span>
								<h5 class="price">$15.00</h5>
							</div>
							<a class="detail-btn" href="our-menu-1.html"><i class="fa-solid fa-plus"></i></a>
						</div>
					</li>
				</ul>

				<div class="section-head text-center">
					<h2 class="title">Hot Deals Menu</h2>
				</div>

				<div class="owl-carousel">
					<div class="item">
						<div class="card-container  m-b30">
							<div class="dz-img-box style-4 box-hover">
								<div class="menu-detail">
									<div class="dz-media">
										<img src="assets/images/menu-small/pic1.png" alt="/">
									</div>
									<div class="dz-content">
										<h5 class="title"><a href="{{ route('p_details')}}">Burger</a></h5>
										<p>Delicious and Spicy</p>
									</div>
								</div>
								<div class="menu-footer">
									<span>Regular Price</span>
									<h5 class="price">$10.00</h5>
								</div>
								<a class="detail-btn" href="{{ route('p_details')}}"><i class="fa-solid fa-plus"></i></a>
							</div>

						</div>
					</div>
					<div class="item">
						<div class="card-container  m-b30">
							<div class="dz-img-box style-4 box-hover">
								<div class="menu-detail">
									<div class="dz-media">
										<img src="assets/images/menu-small/pic4.png" alt="/">
									</div>
									<div class="dz-content">
										<h5 class="title"><a href="{{ route('p_details')}}">Pasta</a></h5>
										<p>Delicious and Spicy</p>
									</div>
								</div>
								<div class="menu-footer">
									<span>Regular Price</span>
									<h5 class="price">$45.00</h5>
								</div>
								<a class="detail-btn" href="{{ route('p_details')}}"><i class="fa-solid fa-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="card-container  m-b30">
							<div class="dz-img-box style-4 box-hover">
								<div class="menu-detail">
									<div class="dz-media">
										<img src="assets/images/menu-small/pic14.png" alt="/">
									</div>
									<div class="dz-content">
										<h5 class="title"><a href="{{ route('p_details')}}">Soya Rice</a></h5>
										<p>Delicious and Spicy</p>
									</div>
								</div>
								<div class="menu-footer">
									<span>Regular Price</span>
									<h5 class="price">$90.00</h5>
								</div>
								<a class="detail-btn" href="our-menu-1.html"><i class="fa-solid fa-plus"></i></a>
							</div>
						</div>
					</div>

					<div class="item">
						<div class="dz-img-box style-4 box-hover">
							<div class="menu-detail">
								<div class="dz-media">
									<img src="assets/images/menu-small/pic11.png" alt="/">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="{{ route('p_details')}}">Noodles</a></h5>
									<p>Delicious and Spicy</p>
								</div>
							</div>
							<div class="menu-footer">
								<span>Regular Price</span>
								<h5 class="price">$22.00</h5>
							</div>
							<a class="detail-btn" href="our-menu-1.html"><i class="fa-solid fa-plus"></i></a>
						</div>

					</div>

					
				</div>
				
			</div>

			

		</section>
		<!-- Our Menu-->

		
		
	</div>
	
	

	<!--Footer-->
	<footer class="site-footer style-1 bg-dark" id="footer">
		<div class="footer-top">
            <div class="container">
				<div class="row"> 
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						<div class="widget widget_getintuch">
							<h5 class="footer-title">Contact</h5>
							<ul>
								<li>
									<i class="flaticon-placeholder"></i>
									<p>1Address will be shoing here</p>
								</li>
								<li>
									<i class="flaticon-telephone"></i>
									<p>+92 123 456787<br>
										+92 123 123456</p>
								</li>
								<li>
									<i class="flaticon-email-1"></i>
									<p>info@example.com<br>
									info@example.com</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">
						<div class="widget widget_services">
							<h5 class="footer-title">Our Links</h5>
							<ul>
								<li><a href="{{ route('home')}}"><span>Home</span></a></li>
								<li><a href="{{ route('about')}}"><span>About Us</span></a></li>
								<li><a href="services.html"><span>Services</span></a></li>
								<li><a href="team.html"><span>Team</span></a></li>
								<li><a href="blog-standard.html"><span>Blog</span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
						<div class="widget widget_services">
							<h5 class="footer-title">OUR SERVICES</h5>
							<ul>
								<li><a href="blog-open-gutenberg.html"><span>Strategy & Research</span></a></li>
								<li><a href="services.html"><span>Fast Delivery</span></a></li>
								<li><a href="contact-us.html"><span>Seat Reservation</span></a></li>
								<li><a href="shop-style-1.html"><span>Pickup In Store</span></a></li>
								<li><a href="{{ route('menus')}}"><span>Our Menu</span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6	">
						<div class="widget widget_services">
							<h5 class="footer-title">Help Center</h5>
							<ul>
								<li><a href="faq.html"><span>FAQ</span></a></li>
								<li><a href="shop-style-1.html"><span>Shop</span></a></li>
								<li><a href="shop-style-2.html"><span>Category Filter</span></a></li>
								<li><a href="testimonial.html"><span>Testimonials</span></a></li>
								<li><a href="{{ route('contact-us')}}l"><span>Contact Us</span></a></li>
							</ul>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!-- Footer Bottom Part -->
		<div class="container">
			<div class="footer-bottom">
				<div class="row">
					<div class="col-xl-6 col-md-6 text-md-start">
						<p>Copyright 2023 All rights reserved.</p>
					</div>
					<div class="col-xl-6 col-md-6 text-md-end">
						<span class="copyright-text">Powered by <a href="https://www.linkedin.com/in/zeeshan283/" target="_blank">Zeeshan</a></span>
					</div>
				</div>
            </div>
        </div>
		<img class="bg1 dz-move" src="assets/images/background/pic5.png" alt="/">
		<img class="bg2 dz-move" src="assets/images/background/pic6.png" alt="/">
    </footer>
	<!--Footer-->
	
	<div class="scroltop-progress scroltop-primary">
		<svg width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		</svg>
	</div>
	
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="assets/js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELEECT -->
<script src="assets/vendor/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="assets/vendor/masonry/masonry-4.2.2.js"></script><!-- MASONRY -->
<script src="assets/vendor/masonry/isotope.pkgd.min.js"></script><!-- ISOTOPE -->
<script src="assets/vendor/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="assets/vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="assets/vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script><!-- OWL-CAROUSEL -->
<script src="assets/vendor/bootstrap-touchspin/bootstrap-touchspin.js"></script><!-- TOUCHSPIN -->
<script src="assets/vendor/nouislider/nouislider.min.js"></script><!-- NOUSLIDER MIN JS-->
<script src="assets/vendor/wnumb/wNumb.js"></script><!-- WNUMB -->
<script src="assets/js/dz.carousel.min.js"></script><!-- OWL-CAROUSEL -->
<script src="assets/js/dz.ajax.js"></script><!-- AJAX -->
<script src="assets/js/custom.min.js"></script><!-- CUSTOM JS -->
<script src="assets/vendor/rangeslider/rangeslider.js"></script><!-- RANGESLIDER -->
<script src="assets/vendor/switcher/switcher.js"></script><!-- CUSTOM JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
	$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        items: 3, // Number of items to display
        loop: true, // Loop the carousel
        margin: 10, // Space between items
        autoplay: true, // Enable autoplay
        autoplayTimeout: 3000, // Autoplay interval in milliseconds (3 seconds in this example)
        autoplayHoverPause: true, // Pause autoplay on hover
    });
});

</script>


</body>

<!-- Mirrored from swigo.dexignzone.com/xhtml/our-menu-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Sep 2023 18:08:22 GMT -->
</html>

