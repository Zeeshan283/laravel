@extends('layout.app')

@section('content')
<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <div class="page-header-left">
                                <h3>Create Sub Category
                                    {{-- <small>Bigdeal Admin panel</small> --}}
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="/"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Sub Categorys</li>
                                <li class="breadcrumb-item active">Create Sub Category</li>
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
                                    <form method="POST" action="{{ route('sub_categories.store') }}"  enctype="multipart/form-data" class="needs-validation">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Select Category</label>    
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control" id="validationCustom0" name="category_id">
                                                @foreach($categories as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Sub Category Name</label>    
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" name="name" id="validationCustom0" type="text" required="">     
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group row">
                                        
                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Sub Category ImageForApp (Dim: x )</label>    
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" name="imageforapp" id="imageshow1" type="file" >     
                                        </div>

                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" >Sub Category IFA</label>    
                                        </div>
                                        <div class="col-md-3">
                                            <img src="" alt="N/A" class="img-fluid" id="show_image1" width="100" >     
                                        </div>

                                    </div>
                                    
                                    <br>

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Sub Category Image (Dim: 300 x 300)</label>    
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" name="img" id="imageshow" type="file" >     
                                        </div>

                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Sub Category Image</label>    
                                        </div>
                                        <div class="col-md-3">
                                            <img src="" alt="N/A"  class="img-fluid" id="show_image" width="100" >     
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Sub Category Image Slider's (Dim:  1650 x 399):</label>    
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
                                        <div id="thumbnails1" style="display: flex; width:auto;height:60px;"  class="image-container_1"></div>
                                        <div id="fileLimitMessage" style="color: red;"></div>
                                        </div>
                                    </div>

                                    

                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Sub Category Side Slider's (Dim: 270 x 157)</label>    
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
                                        <div id="thumbnails" style="display: flex; width:auto;height:60px;"  class="image-container_1"></div>
                                        <div id="fileLimitMessage" style="color: red;"></div>
                                        </div>
                                    </div>



                                    <div class="form-group row d-none">
                                        <div class="col-xl-3 col-md-4">
                                            <label >Commission Type</label>    
                                        </div>
                                        <div class="col-xl-3 ">
                                               <select class="form-control" id="validationCustom0" name="commission_type">
                                                
                                                <option value="">Select Type</option>
                                                <option value="percentage">Percentage</option>
                                                <option value="amount">Amount</option>
                                                
                                            </select>
                                        </div>

                                        <div class="col-xl-3 col-md-4">
                                            <label >Commission:</label>    
                                        </div>
                                        <div class="col-xl-3 ">
                                            <input class="form-control" name="commission" id="" type="number" >  
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
                                    <div style="text-align: -webkit-right;">
                                    <button type="submit" class="btn btn-primary d-block">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
            

        </div>


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