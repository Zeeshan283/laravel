
<!DOCTYPE html>
<html lang="en" >
    <!--begin::Head-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <title>Verify Email</title>
        <meta charset="utf-8"/>
        <meta name="description" content="Good admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets."/>
        <meta name="keywords" content="Good, bootstrap, bootstrap 5, admin themes, Asp.Net Core & Django starter kits, admin themes, bootstrap admin, bootstrap dashboard, bootstrap dark mode"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>      
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Good – Bootstrap 5 HTML Asp.Net Core, Blazor, Django & Flask Admin Dashboard Template - Good by KeenThemes" />
        <meta property="og:url" content="https://themes.getbootstrap.com/product/good-bootstrap-5-admin-dashboard-template"/>
        <meta property="og:site_name" content="Good by Keenthemes" />
        <link rel="canonical" href="https://preview.keenthemes.com/good/"/>
        {{-- <link rel="shortcut icon" href="../../assets/verify_email/media/logos/favicon.ico"/> --}}

        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="../../../../fonts.googleapis.com/css7b91.css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->

        
        
                    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
                            <link href="../../assets/verify_email/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
                            <link href="../../assets/verify_email/css/style.bundle.css" rel="stylesheet" type="text/css"/>
                        <!--end::Global Stylesheets Bundle-->
        
                    <!--begin::Google tag-->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-37564768-1');
</script>
<!--end::Google tag-->        
        <script>
            // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
            if (window.top != window.self) {
                window.top.location.replace(window.self.location.href);
            }
        </script>
    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_body"  class="app-blank" >
        <!--begin::Theme mode setup on page load-->
<script>
	var defaultThemeMode = "light";
	var themeMode;

	if ( document.documentElement ) {
		if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
			themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
		} else {
			if ( localStorage.getItem("data-bs-theme") !== null ) {
				themeMode = localStorage.getItem("data-bs-theme");
			} else {
				themeMode = defaultThemeMode;
			}			
		}

		if (themeMode === "system") {
			themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
		}

		document.documentElement.setAttribute("data-bs-theme", themeMode);
	}            
</script>
<!--end::Theme mode setup on page load-->            
                    <!--Begin::Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!--End::Google Tag Manager (noscript) -->
        
        <!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Authentication - Signup Verify Email -->
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Content-->
    <div class="d-flex flex-row-fluid flex-column flex-column-fluid text-center p-10 py-lg-20">
        <!--begin::Logo-->
        {{-- <a href="https://preview.keenthemes.com/good/index.html" class="pt-lg-20 mb-12">
            <img alt="Logo" src="../../assets/verify_email/media/logos/default.svg" class="h-40px"/> 
        </a>  --}}
        <a href="#" class="pt-lg-20 mb-12">
            <H1 class="text-black">Menus</H1>
        </a> 
        <!--end::Logo-->

        
    <!--begin::Logo-->
    <h1 class="fw-bold fs-2qx text-gray-800 mb-7">Verify Your Email</h1>
    <!--end::Logo-->

    <!--begin::Message-->
    <div class="fs-3 fw-semibold text-muted mb-10">
        We have sent an email to 
        
        <a href="#" class="link-primary fw-bold">{{ Auth::user()->email }}</a> <br/>

        pelase follow a link to verify your email.
    </div>      
    <!--end::Message-->

    <!--begin::Action-->
    <div class="text-center mb-10">
        <form action="{{ route('logout')}}" method="POST">
            @csrf
            <button class="btn btn-lg btn-primary fw-bold">Logout</button>
        </form>      
    </div>      
    <!--end::Action-->

    <!--begin::Action-->
    <div class="fs-5">
        <span class="fw-semibold text-gray-700">Did’t receive an email?</span>

            <a href="#" class="link-primary fw-bold" id="resendLink">Resend</a>
            
        </div>
    <!--end::Action-->

    </div>
    <!--end::Content-->

    <!--begin::Illustration-->
    <div 
        class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-150px min-h-lg-350px" 
        style="background-image: url(../../assets/verify_email/media/illustrations/sketchy-1/7.png)"> 
    </div>
    <!--end::Illustration-->
</div>
<!--end::Authentication - Signup Verify Email-->
                         </div>
<!--end::Root-->
        
        <!--begin::Javascript-->
        <script>
            var hostUrl = "https://preview.keenthemes.com/good/assets/verify_email/";        </script>

                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                            <script src="../../assets/verify_email/plugins/global/plugins.bundle.js"></script>
                            <script src="../../assets/verify_email/js/scripts.bundle.js"></script>
                        <!--end::Global Javascript Bundle-->
        
                        <script>
                            document.getElementById('resendLink').addEventListener('click', function (e) {
                                e.preventDefault();
                        
                                // Send a POST request to the server
                                fetch('{{ route('verification.resend') }}', {
                                    method: 'POST',
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    },
                                })
                                .then(response => {
                                    if (response.ok) {
                                        // Handle a successful response (e.g., show a success message)
                                        console.log('Verification email has been resent.');
                                    } else {
                                        // Handle an error response (e.g., show an error message)
                                        console.error('Error resending verification email.');
                                    }
                                })
                                .catch(error => {
                                    // Handle any network or other errors
                                    console.error('An error occurred:', error);
                                });
                            });
                        </script>
                <!--end::Javascript-->
        
            </body>
    <!--end::Body-->

</html>