@include('layouts.header')
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
		<!-- Banner  -->
		<div class="dz-bnr-inr style-1 text-center bg-parallax" style="background-image:url('assets/images/banner/bnr1.jpg'); background-size:cover; background-position:center;">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Blog Both Sidebar</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Blog Both Sidebar</li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		<!-- Blog Section -->
		<section class="content-inner">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-5 col-md-6 m-b30 order-lg-1 order-sm-2 order-2">
						<aside class="side-bar sticky-top left">
							<div class="widget recent-posts-entry">
								<div class="widget-title">
									<h4 class="title">Latest Post</h4>
								</div>
								<div class="widget-post-bx">
									<div class="widget-post clearfix">
										<div class="dz-media"> 
											<img src="assets/images/blog/recent-blog/pic1.jpg" alt="/">
										</div>
										<div class="dz-info">
											<h6 class="title"><a href="blog-standard.html">Explore the Food Taste</a></h6>
											<div class="dz-meta">
												<ul>
													<li><a href="javascript:void(0);">
														<i class="flaticon-calendar-date"></i>
														20 May, 2023</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="widget-post clearfix">
										<div class="dz-media"> 
											<img src="assets/images/blog/recent-blog/pic2.jpg" alt="/">
										</div>
										<div class="dz-info">
											<h6 class="title"><a href="blog-standard.html">Delicious Food Secret</a></h6>
											<div class="dz-meta">
												<ul>
													<li><a href="javascript:void(0);">
														<i class="flaticon-calendar-date"></i>
														10 Dec, 2023</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="widget-post clearfix">
										<div class="dz-media"> 
											<img src="assets/images/blog/recent-blog/pic3.jpg" alt="/">
										</div>
										<div class="dz-info">
											<h6 class="title"><a href="blog-standard.html"> Inspiration for Food</a></h6>
											<div class="dz-meta">
												<ul>
													<li><a href="javascript:void(0);">
														<i class="flaticon-calendar-date"></i>
														05 Jan, 2023</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="widget widget_categories mb-3">
								<div class="widget-title">
									<h4 class="title">Categories</h4>
								</div>
								<ul>
									<li class="cat-item"><a href="blog-standard.html">Pepperoni Pizza</a></li>
									<li class="cat-item"><a href="blog-standard.html">Apricot Chicken</a></li>                       
									<li class="cat-item"><a href="blog-standard.html">Pizza Veronese</a></li>
									<li class="cat-item"><a href="blog-standard.html">Summer Pizza</a></li>
									<li class="cat-item"><a href="blog-standard.html">Italian Tuna</a></li> 
								</ul>
							</div>
						</aside>
					</div>
					<div class="col-xl-6 col-lg-7 col-md-12 m-b30 order-lg-2 order-sm-1">
						<div class="row">
							<div class="col-xl-12 col-lg-12">
								<div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom m-b30">
									<div class="dz-media">
										<a href="blog-standard.html"><img src="assets/images/blog/grid/pic1.jpg" alt="/"></a>
									</div>
									<div class="dz-info">
										<div class="dz-meta">
											<ul>
												<li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 26 Jan 2023</a></li>
												<li class="dz-comment"><a href="javascript:void(0);"><i class="flaticon-chat-bubble"></i> 2.5K</a></li>
											</ul>
										</div> 
										<h5 class="dz-title"><a href="blog-standard.html">Paradise Taste of Dishes</a></h5>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
										<div class="read-btn">
											<a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12">
								<div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom m-b30">
									<div class="dz-media">
										<a href="blog-standard.html"><img src="assets/images/blog/grid/pic2.jpg" alt="/"></a>
									</div>
									<div class="dz-info">
										<div class="dz-meta">
											<ul>
												<li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 7 Mar 2023</a></li>
												<li class="dz-comment"><a href="javascript:void(0);"><i class="flaticon-chat-bubble"></i> 2.5K</a></li>
											</ul>
										</div> 
										<h5 class="dz-title"><a href="blog-standard.html">Taste of Paradise Dishes</a></h5>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
										<div class="read-btn">
											<a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12">
								<div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom m-b30">
									<div class="dz-media">
										<a href="blog-standard.html"><img src="assets/images/blog/grid/pic3.jpg" alt="/"></a>
									</div>
									<div class="dz-info">
										<div class="dz-meta">
											<ul>
												<li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 26 Jan 2023</a></li>
												<li class="dz-comment"><a href="javascript:void(0);"><i class="flaticon-chat-bubble"></i> 2.5K</a></li>
											</ul>
										</div> 
										<h5 class="dz-title"><a href="blog-standard.html">The Fork & Knife</a></h5>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
										<div class="read-btn">
											<a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12">
								<div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom m-b30">
									<div class="dz-media">
										<a href="blog-standard.html"><img src="assets/images/blog/grid/pic4.jpg" alt="/"></a>
									</div>
									<div class="dz-info">
										<div class="dz-meta">
											<ul>
												<li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 9 Feb 2023</a></li>
												<li class="dz-comment"><a href="javascript:void(0);"><i class="flaticon-chat-bubble"></i> 2.2K</a></li>
											</ul>
										</div> 
										<h5 class="dz-title"><a href="blog-standard.html">Flavors Of The World</a></h5>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
										<div class="read-btn">
											<a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12">
								<div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom m-b30">
									<div class="dz-media">
										<a href="blog-standard.html"><img src="assets/images/blog/grid/pic5.jpg" alt="/"></a>
									</div>
									<div class="dz-info">
										<div class="dz-meta">
											<ul>
												<li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 15 Jan 2023</a></li>
												<li class="dz-comment"><a href="javascript:void(0);"><i class="flaticon-chat-bubble"></i> 2.0K</a></li>
											</ul>
										</div> 
										<h5 class="dz-title"><a href="blog-standard.html">Paradise Taste of Dishes</a></h5>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
										<div class="read-btn">
											<a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12">
								<div class="dz-card style-1 blog-half overlay-shine dz-img-effect zoom m-b30">
									<div class="dz-media">
										<a href="blog-standard.html"><img src="assets/images/blog/grid/pic6.jpg" alt="/"></a>
									</div>
									<div class="dz-info">
										<div class="dz-meta">
											<ul>
												<li><a href="javascript:void(0);"><i class="flaticon-calendar-date"></i> 20 Dec 2023</a></li>
												<li class="dz-comment"><a href="javascript:void(0);"><i class="flaticon-chat-bubble"></i> 2.7K</a></li>
											</ul>
										</div> 
										<h5 class="dz-title"><a href="blog-standard.html">Tabletop Treats Cheese</a></h5>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have.</p>
										<div class="read-btn">
											<a href="blog-standard.html" class="btn btn-primary btn-hover-2">Read More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="text-center m-t10">
							<ul class="pagination m-b15">
								<li class="page-item"><a class="page-link prev" href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a></li>
								<li class="page-item"><a class="page-link active" href="javascript:void(0);"><span>1</span></a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);"><span>2</span></a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);"><span>3</span></a></li>
								<li class="page-item"><a class="page-link next" href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-3 col-lg-5 col-md-6 m-b30 order-lg-3 order-sm-2 d-lg-none d-xl-block">
						<aside class="side-bar sticky-top">
							<div class="widget">
								<div class="widget-title">
									<h4 class="title">Search</h4>
								</div>
								<div class="search-bx">
									<form role="search" method="post">
										<div class="input-group">
											<div class="input-side">
												<input name="text" class="form-control" placeholder="Search" type="text">
												<div class="input-group-btn">
													<button type="submit" class="btn btn-primary">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.58366 17.5001C13.9559 17.5001 17.5003 13.9557 17.5003 9.58342C17.5003 5.21116 13.9559 1.66675 9.58366 1.66675C5.21141 1.66675 1.66699 5.21116 1.66699 9.58342C1.66699 13.9557 5.21141 17.5001 9.58366 17.5001Z" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M18.3337 18.3334L16.667 16.6667" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
														</svg>
													</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="widget widget_categories">
								<div class="widget-title">
									<h4 class="title">Categories</h4>
								</div>
								<ul>
									<li class="cat-item"><a href="blog-standard.html">Pepperoni Pizza</a></li>
									<li class="cat-item"><a href="blog-standard.html">Apricot Chicken</a></li>                       
									<li class="cat-item"><a href="blog-standard.html">Pizza Veronese</a></li>
									<li class="cat-item"><a href="blog-standard.html">Summer Pizza</a></li>
									<li class="cat-item"><a href="blog-standard.html">Italian Tuna</a></li> 
								</ul>
							</div>
							
							<div class="widget widget_tag_cloud mb-0">
								<div class="widget-title">
									<h4 class="title">Popular Tags</h4>
								</div>
								<div class="tagcloud"> 
									<a href="product-detail.html">Pizza</a>
									<a href="product-detail.html">Chicken</a>
									<a href="product-detail.html">Pizza Veronese</a>
									<a href="product-detail.html">Burger</a>
									<a href="product-detail.html">Sandwich</a>
								</div>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</section>
		<!-- Blog Section -->
		
	</div>

@include('layouts.footer')