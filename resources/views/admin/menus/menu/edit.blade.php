<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="Bootstrap Icon Picker plugin for Bootstrap"/>
    <title>Mavarid</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flag-icon.css')}}">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/icofont.css')}}">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/chartist.css')}}">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vector-map.css')}}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/admin.css')}}">

    <!-- Dropzone css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dropzone.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
    
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!-- Load the Latest Bootstrap 5 Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Load the Latest Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Load the Icon Picker's Stylesheet -->
    <link href="{{asset('dist/css/bootstrapicons-iconpicker.css')}}" rel="stylesheet">
    <style>
        body { background: #fafafa; }
        .container { margin: 150px auto; max-width: 640px; }

        .image-container_1 {
        max-height: 400px; /* Set the maximum height you want for the images */
        overflow-y: auto; /* Add a vertical scrollbar if needed */
        }

    .img-thumbnail_1 {
        display: block;
        margin-bottom: 10px; /* Add some spacing between images */
    }
    </style>
</head>
<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">
    
    <!-- Page Header Start-->
    @include('layout.header')
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        @include('layout.sidebar')
        <!-- Page Sidebar Ends-->

<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <div class="page-header-left">
                                <h3>Update Menu
                                    {{-- <small>Bigdeal Admin panel</small> --}}
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="/"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Menus</li>
                                <li class="breadcrumb-item active">Update Menu</li>
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
                                <h5>Update Menu</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('menus.update', ['menu' => $edit->id]) }}"  enctype="multipart/form-data" class="needs-validation">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Menu Name</label>    
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" value="{{ $edit->name }}" name="name" id="validationCustom0" type="text" required="">     
                                        </div>

                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Select Icon</label>    
                                        </div>
                                        <div class="col-md-3">
                                        <input type="text" value="{{ $edit->icon }}" name="icon" class="form-control iconpicker" placeholder="Select Icon" aria-label="Icone Picker"
                                        aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Select Menu Slider's (Dim: 1650 x 399)</label>    
                                        </div>
                                        <div class="col-md-3">
                                                
                                                <input type="file" name="sliders[]" id="imageInput"  class="form-control" multiple >
                                                <button type="button" class="d-none form-control" style="width: auto;"id="chooseImages">Choose Images</button>
                                                    
                                            </div>

                                            <br>
                                        <div class="col-xl-3 col-md-2">
                                            <label >Slider Images</label>    
                                        </div>
                                        <div class=" col-md-3">
                                        <div id="thumbnails" style="display: flex; width:auto;height:80px;"  class="image-container_1"></div>
                                        <div id="fileLimitMessage" style="color: red;"></div>
                                        </div>
                                    </div>
                                    <div style="text-align: -webkit-right;">
                                    <button type="submit" class="btn btn-primary d-block">Update</button>
                                    </div>        
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
<!-- Container-fluid Ends-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            
                            <div class="card-body">
                               
                                    <div class="form-group row">
                                        

                                        <div class="form-group row mt-5">
                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" >Menu Slider's (Dim: 1650 x 399)</label>    
                                        </div>
                                        <div class="col-md-9">
                                        <div class="input-right-icon">
                                            <div id="loopImg_p" class="image-container_1" style="display: flex;">
                                                {{-- @foreach (json_decode($edit->p_c1_images) as $value)
                                                    <img src="{{ asset($value) }}" class="img-thumbnail_1" style="width:100px;height:80px;" />
                                                @endforeach --}}
                                                @if (!empty($edit->sliders))
                                                        @php
                                                            $decodedImages = json_decode($edit->sliders);
                                                        @endphp

                                                        @if ($decodedImages !== null)
                                                            @foreach ($decodedImages as $key => $image)
                                                            <div class="image-item">
                                                                <img src="{{ asset($image) }}" class="img-thumbnail" style="width:100px;height:80px;" />
                                                                <button class="delete-image btn btn-outline-danger " data-image-id="{{ $key }}">Delete</button>
                                                            </div>
                                                
                                                            @endforeach
                                                        @else
                                                            <p>Invalid JSON data in $edit->p_c3_images</p>
                                                        @endif
                                                    @else
                                                        <p>images is empty or null</p>
                                                    @endif 
                                            </div>
                                        </div>
                                        
                                        </div>
                                        </div>

                                    </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- latest jquery-->
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.js')}}"></script>

<!-- feather icon js-->
<script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>

<!-- Sidebar jquery-->
<script src="{{asset('assets/js/sidebar-menu.js')}}"></script>

<!--chartist js-->
<script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>


<!--dropzone js-->
<script src="{{asset('assets/js/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assets/js/dropzone/dropzone-script.js')}}"></script>

<!--ckeditor js-->
<script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/styles.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/ckeditor.custom.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('assets/js/lazysizes.min.js')}}"></script>

<!--copycode js-->
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>

<!--counter js-->
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>

<!--Customizer admin-->
<script src="{{asset('assets/js/admin-customizer.js')}}"></script>

<!--map js-->
<script src="{{asset('assets/js/vector-map/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{asset('assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js')}}"></script>

<!--apex chart js-->
<script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>

<!--chartjs js-->
<script src="{{asset('assets/js/chart/flot-chart/excanvas.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.time.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.categories.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.stack.js')}}"></script>
<script src="{{asset('assets/js/chart/flot-chart/jquery.flot.pie.js')}}"></script>
<!--dashboard custom js-->
<script src="{{asset('assets/js/dashboard/default.js')}}"></script>

<!--right sidebar js-->
<script src="{{asset('assets/js/chat-menu.js')}}"></script>

<!--height equal js-->
<script src="{{asset('assets/js/equal-height.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('assets/js/lazysizes.min.js')}}"></script>

<!--script admin-->
<script src={{asset('assets/js/admin-script.js')}}"></script>

<!-- Datatables js-->
<script src="{{asset('assets/js/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatables/custom-basic.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Load the Latest Bootstrap 5 Framework -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Load the Icon Picker's JavaScript -->
<script src="{{asset('dist/js/bootstrapicon-iconpicker.js')}}"></script>
<script>
    // initialize the icon picker and done
    $('.iconpicker').iconpicker({
        // customize the icon picker with the following options
        // THANKS FOR WATCHING!
        title: 'My Icon Picker',
        selected: false,
        defaultValue: false,
        placement: "bottom",
        collision: "none",
        animation: true,
        hideOnSelect: true,
        showFooter: true,
        searchInFooter: false,
        mustAccept: false,
        selectedCustomClass: "bg-primary",
        fullClassFormatter: function (e) {
            return e;
        },
        input: "input,.iconpicker-input",
        inputSearch: false,
        container: false,
        component: ".input-group-addon,.iconpicker-component",
        templates: {
            popover: '<div class="iconpicker-popover popover" role="tooltip"><div class="arrow"></div>' + '<div class="popover-title"></div><div class="popover-content"></div></div>',
            footer: '<div class="popover-footer"></div>',
            buttons: '<button class="iconpicker-btn iconpicker-btn-cancel btn btn-default btn-sm">Cancel</button>' + ' <button class="iconpicker-btn iconpicker-btn-accept btn btn-primary btn-sm">Accept</button>',
            search: '<input type="search" class="form-control iconpicker-search" placeholder="Type to filter" />',
            iconpicker: '<div class="iconpicker"><div class="iconpicker-items"></div></div>',
            iconpickerItem: '<a role="button" href="javascript:;" class="iconpicker-item"><i></i></a>'
        }
    });
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1VDDWMRSTH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-1VDDWMRSTH');
</script>
<script>
try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    return true;
  }).catch(function(e) {
    var carbonScript = document.createElement("script");
    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
    carbonScript.id = "_carbonads_js";
    document.getElementById("carbon-block").appendChild(carbonScript);
  });
} catch (error) {
  console.log(error);
}


</script>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // Handle the click event for delete buttons
        $('.delete-image').on('click', function () {
            var imageId = $(this).data('image-id');
            var menuId = {{ $edit->id }}; // Get the category ID

            // Send an AJAX request to delete the image
            $.ajax({
                type: 'DELETE',
                url: '/menus/' + menuId + '/delete-image/' + imageId,
                success: function (response) {
                    // Handle success (e.g., remove the image from the DOM)
                    if (response.success) {
                        $('.image-item[data-image-id="' + imageId + '"]').remove();
                        location.reload();
                    } else {
                        // Handle error, display a message, etc.
                        console.error('Error deleting image');
                    }
                },
                error: function () {
                    // Handle AJAX error, display a message, etc.
                    console.error('AJAX error');
                }
            });
        });
    });
</script>

<script>
    document.getElementById('chooseImages').addEventListener('click', function () {
        document.getElementById('imageInput').click();
        
    });

    document.getElementById('imageInput').addEventListener('change', function () {
        
        var RemoveImg = document.getElementById('loopImg');
        if (RemoveImg) {
            RemoveImg.style.display = 'none';
        }

        var files = this.files;
        var maxImages = 100; // Set your maximum image limit here
        var fileLimitMessage = document.getElementById('fileLimitMessage');
        if (files.length > maxImages) {
            fileLimitMessage.textContent = 'Please select a maximum of ' + maxImages + ' images.';
            this.value = ''; // Clear selected files
        } else {
            fileLimitMessage.textContent = ''; // Clear the message if within the limit
        }
    });
    document.getElementById('imageInput').addEventListener('change', function () {
        
        var thumbnails = document.getElementById('thumbnails');
        thumbnails.innerHTML = ''; // Clear previous thumbnails

        var files = this.files;
    var maxImages = 100; // Set your maximum image limit here
    for (var i = 0; i < Math.min(files.length, maxImages); i++) {
        var img = document.createElement('img');
        img.src = URL.createObjectURL(files[i]);
        img.style.maxWidth = '100px';
        thumbnails.appendChild(img);
    }

        // Show the upload button when at least one image is selected
        
    });
</script>
</body>
</html>
