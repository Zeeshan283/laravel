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
		<div class="dz-bnr-inr style-1 text-center bg-parallax" style="background-image:url('assets/images/banner/bnr3.jpg'); background-size:cover; background-position:center;">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Shop Checkout</h1>
					<!-- Breadcrumb Row -->
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Shop Checkout</li>
						</ul>
					</nav>
					<!-- Breadcrumb Row End -->
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		<!-- Cart Section -->
		<section class="content-inner">
			<div class="container">
				<form class="shop-form">
					<div class="row">
						<div class="col-lg-6">
							<div class="widget">
								<h4 class="widget-title">Billing & Shipping Address</h4>
								<div class="form-group m-b20">
									<select class="form-select default-select">
										<option value="1">Åland Islands</option>
										<option value="2">Afghanistan</option>
										<option value="3">Albania</option>
										<option value="4">Algeria</option>
										<option value="5">Andorra</option>
										<option value="6">Angola</option>
										<option value="7">Anguilla</option>
										<option value="8">Antarctica</option>
										<option value="9">Antigua and Barbuda</option>
										<option value="10">Argentina</option>
										<option value="11">Armenia</option>
										<option value="12">Aruba</option>
										<option value="13">Australia</option>
									</select>	
								</div>
								<div class="row">
									<div class="form-group col-md-6 m-b20">
										<input name="dzFirstName" required type="text" class="form-control" placeholder="First Name">
									</div>
									<div class="form-group col-md-6 m-b20">
										<input name="dzLastName" required type="text" class="form-control" placeholder="Last Name">
									</div>
								</div>
								<div class="form-group m-b20">
									<input name="dzOther[CompanyType]" required type="text" class="form-control" placeholder="Company Name">
								</div>
								<div class="form-group m-b20">
									<input name="dzOther[Address]" required type="text" class="form-control" placeholder="Address">
								</div>
								<div class="row">
									<div class="form-group col-md-6 m-b20">
										<input name="dzOther[Other]" required type="text" class="form-control" placeholder="Apartment, suite, unit etc.">
									</div>
									<div class="form-group col-md-6 m-b20">
										<input name="dzOther[Town/City]" required type="text" class="form-control" placeholder="Town / City">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6 m-b20">
										<input name="dzOther[State/County]" required type="text" class="form-control" placeholder="State / County">
									</div>
									<div class="form-group col-md-6 m-b20">
										<input name="Postcode/Zip" required type="text" class="form-control" placeholder="Postcode / Zip">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6 m-b20">
										<input name="dzEmail" required type="email" class="form-control" placeholder="Email">
									</div>
									<div class="form-group col-md-6 m-b20">
										<input name="dzPhoneNumber" required type="text" class="form-control dz-number" placeholder="Phone">
									</div>
								</div>
								<button class="btn btn-gray btnhover mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#create-an-account">Create an account <i class="fa fa-angle-down m-l10"></i></button>
								<div id="create-an-account" class="collapse">
									<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
									<div class="form-group">
										<input name="Password" type="password" class="form-control" placeholder="Password">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<button class="btn btn-gray btnhover mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#different-address">Ship to a different address <i class="fa fa-angle-down m-l10"></i></button>
							<div id="different-address" class="collapse">
								<p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>
								<div class="form-group m-b20">
									<select class="form-select default-select">
										<option value="Åland Islands">Åland Islands</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antarctica">Antarctica</option>
										<option value="Antigua and Barbuda">Antigua and Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Australia">Australia</option>
									</select>	
								</div>
								<div class="row">
									<div class="form-group col-md-6 m-b20">
										<input name="dzFirstName" type="text" class="form-control" placeholder="First Name">
									</div>
									<div class="form-group col-md-6 m-b20">
										<input name="dzLastName" type="text" class="form-control" placeholder="Last Name">
									</div>
								</div>
								<div class="form-group m-b20">
									<input name="dzFirstName" type="text" class="form-control" placeholder="Company Name">
								</div>
								<div class="form-group m-b20">
									<input name="dzOther[Address]" type="text" class="form-control" placeholder="Address">
								</div>
								<div class="row">
									<div class="form-group col-md-6 m-b20">
										<input name="dzOther[Other]" type="text" class="form-control" placeholder="Apartment, suite, unit etc.">
									</div>
									<div class="form-group col-md-6 m-b20">
										<input name="dzOther[Town/City]" type="text" class="form-control" placeholder="Town / City">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6 m-b20">
										<input name="dzOther[State/County]" type="text" class="form-control" placeholder="State / County">
									</div>
									<div class="form-group col-md-6 m-b20">
										<input name="dzOther[Postcode/Zip]" type="text" class="form-control" placeholder="Postcode / Zip">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-6 m-b20">
										<input name="dzEmail" type="email" class="form-control" placeholder="Email">
									</div>
									<div class="form-group col-md-6 m-b20">
										<input name="dzPhoneNumber" type="text" class="form-control dz-number" placeholder="Phone">
									</div>
								</div>
								<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="5" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
							</div>
						
						</div>
					</div>
				</form>
				<div class="dz-divider bg-gray-dark icon-center my-5">
					<i class="fa fa-circle bg-white text-primary"></i>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="widget">
							<h4 class="widget-title">Your Order</h4>
							<table class="table-bordered check-tbl">
								<thead class="text-center">
									<tr>
										<th>IMAGE</th>
										<th>PRODUCT NAME</th>
										<th>TOTAL</th>
									</tr>
								</thead>
								<tbody>
									
									<tr>
										<td class="product-item-img"><img src="assets/images/gallery/small/pic4.jpg" alt="/"></td>
										<td class="product-item-name">Prduct Item 4</td>
										<td class="product-price">$36.00</td>
									</tr>
									<tr>
										<td class="product-item-img"><img src="assets/images/gallery/small/pic3.jpg" alt="/"></td>
										<td class="product-item-name">Prduct Item 3</td>
										<td class="product-price">$25.00</td>
									</tr>
									<tr>
										<td class="product-item-img"><img src="assets/images/gallery/small/pic2.jpg" alt="/"></td>
										<td class="product-item-name">Prduct Item 2</td>
										<td class="product-price">$22.00</td>
									</tr>
									<tr>
										<td class="product-item-img"><img src="assets/images/gallery/small/pic1.jpg" alt="/"></td>
										<td class="product-item-name">Prduct Item 1</td>
										<td class="product-price">$28.00</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-lg-6">
						<form class="shop-form widget">
							<h4 class="widget-title">Order Total</h4>
							<table class="table-bordered check-tbl mb-4">
								<tbody>
									<tr>
										<td>Order Subtotal</td>
										<td class="product-price">$125.96</td>
									</tr>
									<tr>
										<td>Shipping</td>
										<td>Free Shipping</td>
									</tr>
									<tr>
										<td>Coupon</td>
										<td class="product-price">$28.00</td>
									</tr>
									<tr>
										<td>Total</td>
										<td class="product-price-total">$506.00</td>
									</tr>
								</tbody>
							</table>
							<h4 class="widget-title">Payment Method</h4>
							<div class="form-group m-b20">
								<input type="text" class="form-control" placeholder="Name on Card">
							</div>
							<div class="form-group m-b20">
								<select class="form-select default-select">
									<option value="Credit Card Type">Credit Card Type</option>
									<option value="Another option">Another option</option>
									<option value="A option">A option</option>
									<option value="Potato">Potato</option>
								</select>	
							</div>
							<div class="form-group m-b20">
								<input name="dzOther[CreditCardNumber]" type="text" class="form-control" placeholder="Credit Card Number">
							</div>
							<div class="form-group m-b20">
								<input name="dzOther[CardVerificationNumber]" type="text" class="form-control" placeholder="Card Verification Number">
							</div>
							<div class="form-group">
								<button class="btn btn-gray btn-hover-2" type="submit" value="submit" name="submit">Place Order Now </button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- cart Section -->
		
	</div>


@include('layouts.footer')