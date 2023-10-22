@extends('layout.app')

@section('content')
<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <div class="page-header-left">
                                <h3>Update Sub Category
                                    {{-- <small>Bigdeal Admin panel</small> --}}
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="/"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Sub Categorys</li>
                                <li class="breadcrumb-item active">Update Sub Category</li>
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
                                <h5>Add Sub Category</h5>
                            </div>
                            <div class="card-body">
                                    <form method="POST" action="{{ route('sub_categories.update',['sub_category' => $edit->id]) }}"  enctype="multipart/form-data" class="needs-validation">
                                        @csrf
                                        @method('PUT')
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Select Category</label>    
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control" id="validationCustom0" name="category_id">
                                                <option value="{{ $edit->categories->id }}" selected>{{ $edit->categories->name }}</option>
                                                @foreach($categories as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Sub Category Name</label>    
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" value="{{ $edit->name }}" name="name" id="validationCustom0" type="text" required="">     
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Sub Category Image (Dim: 300 x 300)</label>    
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" name="img" id="imageshow" type="file" >     
                                        </div>

                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Sub Category ImageForApp (Dim:  x )</label>    
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" name="imageforapp" id="imageshow1" type="file" >     
                                        </div>
                                    </div>
                                    <div class="form-group row d-none">
                                        <div class="col-xl-3 col-md-4">
                                            <label >Commission Type</label>    
                                        </div>
                                        <div class="col-xl-3 ">
                                               <select class="form-control" id="validationCustom0" name="commission_type">
                                                <option value="{{ $edit->commission_type }}" selected>{{ $edit->commission_type }}</option>
                                                <option value="percentage">Percentage</option>
                                                <option value="amount">Amount</option>
                                                
                                            </select>
                                        </div>

                                        <div class="col-xl-3 col-md-4">
                                            <label >Commission:</label>    
                                        </div>
                                        <div class="col-xl-3 ">
                                            <input class="form-control" value="{{ $edit->commission }}" name="commission" id="" type="number" >  
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Category Image Slider's (Dim: 1300 x 399) </label>    
                                        </div>
                                        <div class="col-md-3">
                                                
                                                <input type="file" name="sliders[]" id="imageInput1"  class="form-control" multiple >
                                                <button type="button" class="d-none form-control" style="width: auto;"id="chooseImages1">Choose Images</button>
                                                    
                                            </div>

                                            <br>
                                        <div class="col-xl-3 col-md-2">
                                            <label >Slider Images</label>    
                                        </div>
                                        <div class=" col-md-3">
                                        <div id="thumbnails1" style="display: flex; width:auto;height:80px;"  class="image-container_1"></div>
                                        <div id="fileLimitMessage" style="color: red;"></div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Category Side Slider's (Dim: 270 x 157)</label>    
                                        </div>
                                        <div class="col-md-3">
                                                
                                                <input type="file" name="side_sliders[]" id="imageInput"  class="form-control" multiple >
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

                                    <div class="form-group row">
                                        
                                        <div class="col-xl-3 col-md-4">
                                            <label >Status</label>    
                                        </div>
                                        <div class="col-xl-3 ">
                                            <div class="checkbox checkbox-primary ">
                                                <input id="checkbox-primary-2" type="checkbox" data-original-title="" title="">
                                                <label for="checkbox-primary-2">Enable the Sub Category</label>
                                            </div>    
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary d-block">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            
                            <div class="card-body">
                               
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Sub Category Image (Dim: 300 x 300)</label>    
                                        </div>
                                        <div class="col-md-3">
                                        <img src="{{asset($edit->img)}}" alt="N/A"  class="img-fluid" id="show_image" width="150" >

                                        </div>

                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Sub Category ImageForApp (Dim:  x )</label>    
                                        </div>
                                        <div class="col-md-3">
                                        <img src="{{asset($edit->imageforapp)}}" alt="N/A" class="img-fluid" id="show_image1" width="150" >
                                        
                                        </div>


                                        <div class="form-group row mt-5">
                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Image Slider (Dim: 1300 x 399)</label>    
                                        </div>
                                        <div class="col-md-9">
                                        <div class="input-right-icon">
                                            <div id="loopImg_p1" class="image-container_1" style="display: flex;">
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
                                                                <button class="delete-slider btn btn-outline-danger " data-image-id="{{ $key }}">Delete</button>
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

                                        <div class="form-group row mt-5">
                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Side Slider (Dim: 270 x 157)</label>    
                                        </div>
                                        <div class="col-md-9">
                                        <div class="input-right-icon">
                                            <div id="loopImg_p" class="image-container_1" style="display: flex;">
                                                {{-- @foreach (json_decode($edit->p_c1_images) as $value)
                                                    <img src="{{ asset($value) }}" class="img-thumbnail_1" style="width:100px;height:80px;" />
                                                @endforeach --}}
                                                @if (!empty($edit->side_sliders))
                                                        @php
                                                            $decodedImages = json_decode($edit->side_sliders);
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
            var categoryId = {{ $edit->id }}; // Get the category ID

            // Send an AJAX request to delete the image
            $.ajax({
                type: 'DELETE',
                url: '/subcategories/' + categoryId + '/delete-image/' + imageId,
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


        $('.delete-slider').on('click', function () {
            var imageId = $(this).data('image-id');
            var categoryId = {{ $edit->id }}; // Get the category ID

            // Send an AJAX request to delete the image
            $.ajax({
                type: 'DELETE',
                url: '/subcategoriesslider/' + categoryId + '/delete-image/' + imageId,
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
        var maxImages = 30; // Set your maximum image limit here
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
    var maxImages = 30; // Set your maximum image limit here
    for (var i = 0; i < Math.min(files.length, maxImages); i++) {
        var img = document.createElement('img');
        img.src = URL.createObjectURL(files[i]);
        img.style.maxWidth = '100px';
        thumbnails.appendChild(img);
    }

        // Show the upload button when at least one image is selected
        
    });
</script>


<script>
    document.getElementById('chooseImages1').addEventListener('click', function () {
        document.getElementById('imageInput1').click();
        
    });

    document.getElementById('imageInput1').addEventListener('change', function () {
        
        var RemoveImg = document.getElementById('loopImg1');
        if (RemoveImg) {
            RemoveImg.style.display = 'none';
        }

        var files = this.files;
        var maxImages = 30; // Set your maximum image limit here
        var fileLimitMessage = document.getElementById('fileLimitMessage');
        if (files.length > maxImages) {
            fileLimitMessage.textContent = 'Please select a maximum of ' + maxImages + ' images.';
            this.value = ''; // Clear selected files
        } else {
            fileLimitMessage.textContent = ''; // Clear the message if within the limit
        }
    });
    document.getElementById('imageInput1').addEventListener('change', function () {
        
        var thumbnails = document.getElementById('thumbnails1');
        thumbnails.innerHTML = ''; // Clear previous thumbnails

        var files = this.files;
    var maxImages = 30; // Set your maximum image limit here
    for (var i = 0; i < Math.min(files.length, maxImages); i++) {
        var img = document.createElement('img');
        img.src = URL.createObjectURL(files[i]);
        img.style.maxWidth = '100px';
        thumbnails.appendChild(img);
    }

        // Show the upload button when at least one image is selected
        
    });
</script>
@endsection