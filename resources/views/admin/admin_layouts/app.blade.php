<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="pixelstrap">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('admin_assets/images/favicon/favicon.png" type="image/x-icon') }}">
    <link rel="shortcut icon" href="{{ asset('admin_assets/images/favicon/favicon.png" type="image/x-icon') }}">
    <title>Restaurant - Admin Template</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/font-awesome.css') }}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/flag-icon.css') }}">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/icofont.css') }}">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/prism.css') }}">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/chartist.css') }}">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/vector-map.css') }}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/bootstrap.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/admin.css') }}">

    <!-- Dropzone css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/dropzone.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets/css/datatables.css') }}">
    <!-- Load the Latest Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    {{-- toastr stylesheet --}}
    <link rel="stylesheet" href="{{ URL::asset('admin_assets/website-admin_assets/css/toastr.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('admin_assets/css/choices.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/admin_assets/styles/base.min.css"/> --}}

    {{-- <link href="//cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet" />
    <link href="//cdn.quilljs.com/1.0.0/quill.bubble.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('admin_assets/styles/vendor/quill.bubble.css')}}">
    <link rel="stylesheet" href="{{asset('admin_assets/styles/vendor/quill.snow.css')}}"> --}}
    <style>
        .image-container_1 {
            max-height: 400px;
            /* Set the maximum height you want for the images */
            overflow-y: auto;
            /* Add a vertical scrollbar if needed */
        }

        .img-thumbnail_1 {
            display: block;
            margin-bottom: 10px;
            /* Add some spacing between images */
        }

        /* .choices__inner{
        background:#cfd4da;
    } */

        label.ul-form__label {
            font-size: 13px;
            font-weight: 400;
            margin-bottom: 5px;
            text-align: right;
            padding: 7px 0;
        }
    </style>

    @yield('style')
</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">

        <!-- Page Header Start-->
        @include('admin.admin_layouts.header')
        <!-- Page Header Ends -->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <!-- Page Sidebar Start-->
            @include('admin.admin_layouts.sidebar')
            <!-- Page Sidebar Ends-->

            <!-- Right sidebar Start-->
            <div class="right-sidebar custom-scrollbar" id="right_side_bar">
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
                                    <li class="clearfix"><img class="rounded-circle user-image"
                                            src="{{ asset('admin_assets/images/dashboard/user.png') }}" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Vincent Porter</div>
                                            <div class="status"> Online</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-circle user-image"
                                            src="{{ asset('admin_assets/images/dashboard/user1.jpg') }}" alt="">
                                        <div class="status-circle away"></div>
                                        <div class="about">
                                            <div class="name">Ain Chavez</div>
                                            <div class="status"> 28 minutes ago</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-circle user-image"
                                            src="{{ asset('admin_assets/images/dashboard/user2.jpg') }}" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Kori Thomas</div>
                                            <div class="status"> Online</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-circle user-image"
                                            src="{{ asset('admin_assets/images/dashboard/user3.jpg') }}" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Erica Hughes</div>
                                            <div class="status"> Online</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-circle user-image"
                                            src="{{ asset('admin_assets/images/dashboard/man.png') }}" alt="">
                                        <div class="status-circle offline"></div>
                                        <div class="about">
                                            <div class="name">Ginger Johnston</div>
                                            <div class="status"> 2 minutes ago</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-circle user-image"
                                            src="{{ asset('admin_assets/images/dashboard/user5.jpg') }}" alt="">
                                        <div class="status-circle away"></div>
                                        <div class="about">
                                            <div class="name">Prasanth Anand</div>
                                            <div class="status"> 2 hour ago</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-circle user-image"
                                            src="{{ asset('admin_assets/images/dashboard/designer.jpg') }}" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Hileri Jecno</div>
                                            <div class="status"> Online</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-circle user-image"
                                            src="{{ asset('admin_assets/images/dashboard/user3.jpg') }}" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Erica Hughes</div>
                                            <div class="status"> Online</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-circle user-image"
                                            src="{{ asset('admin_assets/images/dashboard/man.png') }}" alt="">
                                        <div class="status-circle offline"></div>
                                        <div class="about">
                                            <div class="name">Ginger Johnston</div>
                                            <div class="status"> 2 minutes ago</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-circle user-image"
                                            src="{{ asset('admin_assets/images/dashboard/user5.jpg') }}" alt="">
                                        <div class="status-circle away"></div>
                                        <div class="about">
                                            <div class="name">Prasanth Anand</div>
                                            <div class="status"> 2 hour ago</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-circle user-image"
                                            src="{{ asset('admin_assets/images/dashboard/user3.jpg') }}" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Erica Hughes</div>
                                            <div class="status"> Online</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-circle user-image"
                                            src="{{ asset('admin_assets/images/dashboard/man.png') }}" alt="">
                                        <div class="status-circle offline"></div>
                                        <div class="about">
                                            <div class="name">Ginger Johnston</div>
                                            <div class="status"> 2 minutes ago</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-circle user-image"
                                            src="{{ asset('admin_assets/images/dashboard/user5.jpg') }}" alt="">
                                        <div class="status-circle away"></div>
                                        <div class="about">
                                            <div class="name">Prasanth Anand</div>
                                            <div class="status"> 2 hour ago</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right sidebar Ends-->

            @yield('content')

            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright .</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">nabeel<i class="fa fa-heart"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>

    </div>

    <!-- latest jquery-->
    <script src="{{ asset('admin_assets/js/jquery-3.3.1.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('admin_assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/bootstrap.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('admin_assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/icons/feather-icon/feather-icon.js') }}"></script>

    <!-- Sidebar jquery-->
    <script src="{{ asset('admin_assets/js/sidebar-menu.js') }}"></script>

    <!--chartist js-->
    <script src="{{ asset('admin_assets/js/chart/chartist/chartist.js') }}"></script>


    <!--dropzone js-->
    <script src="{{ asset('admin_assets/js/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('admin_assets/js/dropzone/dropzone-script.js') }}"></script>

    <!--ckeditor js-->
    <script src="{{ asset('admin_assets/js/editor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('admin_assets/js/editor/ckeditor/styles.js') }}"></script>
    <script src="{{ asset('admin_assets/js/editor/ckeditor/adapters/jquery.js') }}"></script>
    <script src="{{ asset('admin_assets/js/editor/ckeditor/ckeditor.custom.js') }}"></script>

    {{-- <!--ckeditor 4 js-->
<script src="{{asset('admin_assets/js/editor/ckeditor1/ckeditor.js')}}"></script>
<script src="{{asset('admin_assets/js/editor/ckeditor1/styles.js')}}"></script>
<script src="{{asset('admin_assets/js/editor/ckeditor1/adapters/jquery.js')}}"></script>
<script src="{{asset('admin_assets/js/editor/ckeditor1/ckeditor.custom.js')}}"></script>
 --}}

    <!-- lazyload js-->
    <script src="{{ asset('admin_assets/js/lazysizes.min.js') }}"></script>

    <!--copycode js-->
    <script src="{{ asset('admin_assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom-card/custom-card.js') }}"></script>

    <!--counter js-->
    <script src="{{ asset('admin_assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/counter/counter-custom.js') }}"></script>

    <!--Customizer admin-->
    <script src="{{ asset('admin_assets/js/admin-customizer.js') }}"></script>

    <!--map js-->
    <script src="{{ asset('admin_assets/js/vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>

    <!--apex chart js-->
    <script src="{{ asset('admin_assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('admin_assets/js/chart/apex-chart/stock-prices.js') }}"></script>

    <!--chartjs js-->
    <script src="{{ asset('admin_assets/js/chart/flot-chart/excanvas.js') }}"></script>
    <script src="{{ asset('admin_assets/js/chart/flot-chart/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin_assets/js/chart/flot-chart/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('admin_assets/js/chart/flot-chart/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('admin_assets/js/chart/flot-chart/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('admin_assets/js/chart/flot-chart/jquery.flot.pie.js') }}"></script>
    <!--dashboard custom js-->
    <script src="{{ asset('admin_assets/js/dashboard/default.js') }}"></script>

    <!--right sidebar js-->
    <script src="{{ asset('admin_assets/js/chat-menu.js') }}"></script>

    <!--height equal js-->
    <script src="{{ asset('admin_assets/js/equal-height.js') }}"></script>

    <!-- lazyload js-->
    <script src="{{ asset('admin_assets/js/lazysizes.min.js') }}"></script>

    <!--script admin-->
    <script src="{{ asset('admin_assets/js/admin-script.js') }}"></script>

    <!-- Main Quill library -->
    {{-- <script src="//cdn.quilljs.com/1.0.0/quill.js"></script> --}}
    {{-- <script src="//cdn.quilljs.com/1.0.0/quill.min.js"></script> --}}
    <!-- Core build with no theme, formatting, non-essential modules -->
    {{-- <link href="//cdn.quilljs.com/1.0.0/quill.core.css" rel="stylesheet" /> --}}
    {{-- <script src="//cdn.quilljs.com/1.0.0/quill.core.js"></script> --}}
    {{-- <script src="{{asset('admin_assets/js/quill.script.js')}}"></script>/ --}}
    {{-- <script src="{{asset('admin_assets/js/vendor/quill.min.js')}}"></script> --}}
    {{-- <script>
  var editor = new Quill('#editor', {
    modules: { toolbar: '#toolbar' },
    theme: 'snow',
  });
</script> --}}

    <!-- Datatables js-->
    <script src="{{ asset('admin_assets/js/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/datatables/custom-basic.js') }}"></script>
    <script src="{{ asset('admin_assets/js/choices.min.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script> --}}

    <script>
        $(document).ready(function() {

            $("#showButton").click(function() {
                $("#showDiv").removeClass("d-none");
            });

            $('#imageshow').change(function(event) {
                var filePath1 = URL.createObjectURL(event.target.files[0]);
                $("#show_image").fadeIn("fast").attr('src', filePath1);
            });

            $('#ashow').change(function(event) {
                var filePath1 = URL.createObjectURL(event.target.files[0]);
                $("#aimage").fadeIn("fast").attr('src', filePath1);
            });

            $('#imageshow1').change(function(event) {
                var filePath1 = URL.createObjectURL(event.target.files[0]);
                $("#show_image1").fadeIn("fast").attr('src', filePath1);
            });

            // Initial tab index
            let currentTab = 0;
            const $tabs = $('.nav.nav-tabs.tab-coupon a');

            // Function to show the current tab
            function showTab(index) {
                $tabs.removeClass('active show');
                $tabs.eq(index).tab('show');
            }

            // Next button click handler
            $('#nextTabButton').on('click', function() {
                currentTab = (currentTab + 1) % $tabs.length;
                showTab(currentTab);
            });

            // Previous button click handler
            $('#prevTabButton').on('click', function() {
                currentTab = (currentTab - 1 + $tabs.length) % $tabs.length;
                showTab(currentTab);
            });
        });
        function onlyNumberKey(evt) {
            // Only ASCII character in that range allowed
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }

        function onlyDecimalNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
        function mesurement() {
            var m_unit = document.getElementById("m_unit");
            var w = document.getElementById("w");
            var h = document.getElementById("h");
            var d = document.getElementById("d");


            if (m_unit.value !== "") {
                w.disabled = false;
                h.disabled = false;
                d.disabled = false;
            } else {
                w.value = "";
                h.value = "";
                d.value = "";
                w.disabled = true;
                h.disabled = true;
                d.disabled = true;
            }


        }

        function weightunit() {
            var weight_unit = document.getElementById("weight_unit");
            var weight = document.getElementById("weight1");

            if (weight_unit.value !== "") {
                weight.disabled = false;
            } else {
                weight.value = "";
                weight.disabled = true;
            }
        }

    </script>

{{-- Toastr --}}
    <script src="{{ URL::asset('assets/website-assets/js/toastr.min.js') }}"></script>
    @if ($errors->any())
        <script>
            toastr.error("{{ $errors->first() }}");
        </script>
    @endif
    {!! Toastr::message() !!}


</body>

</html>
