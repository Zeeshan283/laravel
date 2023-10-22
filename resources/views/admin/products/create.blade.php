@extends('admin.admin_layouts.app')
@section('style')
    <style>
        .choices__input {
            background: #f3f4f6;
        }


        .choices__list--multiple .choices__item {
            /* width: 3%; */
            font-size: 14px;
            font-family: initial;
            /* background-color: #6b7280; */
            /* background-color: #e9ecef; */
            color: black;
            border-radius: 42px;
            /* height: 28px; */
            border: transparent;
        }

        .choices[data-type*=select-multiple] .choices__button {
            border-left: white;
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Add Products
                                {{-- <small></small> --}}
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Product's</li>
                            <li class="breadcrumb-item active">Add Product</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card tab2-card">
                        <div class="card-header">
                            <h5> Add Product</h5>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active show" id="account-tab" data-bs-toggle="tab"
                                        href="#account" role="tab" aria-controls="account" aria-selected="true"
                                        data-original-title="" title="">Product Details</a></li>
                                
                                <li class="nav-item"><a class="nav-link" id="description-tabs" data-bs-toggle="tab"
                                        href="#description" role="tab" aria-controls="description" aria-selected="false"
                                        data-original-title="" title="">Product description</a></li>
                                
                                <li class="nav-item"><a class="nav-link" id="dimention-tabs" data-bs-toggle="tab"
                                        href="#dimention" role="tab" aria-controls="dimention" aria-selected="false"
                                        data-original-title="" title="">Dimention</a></li>
                                <div style="margin-left: auto;"
                                    class="btn-toolbar sw-toolbar sw-toolbar-top justify-content-end">
                                    <li class="navigation-buttons justify-content-end btn-group me-2 sw-tbn-group"
                                        style="display: flex;">
                                        <button class="btn btn-outline-primary " id="prevTabButton">Previous</button>
                                        <button class="btn btn-primary" id="nextTabButton">Next</button>
                                    </li>
                                </div>
                            </ul>



                            {{-- <span>
                                    <div class="btn-toolbar sw-toolbar sw-toolbar-top justify-content-end">
                                    <div class="btn-group me-2 sw-tbn-group" role="group">
                                        <button class="btn btn-primary sw-btn-prev disabled" type="button">Previous</button>
                                        <button class="btn btn-primary sw-btn-next" type="button">Next</button>
                                    </div>
                                    <div class="btn-group me-2 sw-btn-group-extra" role="group">
                                    </div>
                                    </div>
                                </span> --}}

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="account" role="tabpanel"
                                    aria-labelledby="account-tab">
                                    <form class="needs-validation user-add" method="POST" enctype="multipart/form-data"
                                        action="{{ route('products.store') }}">
                                        @csrf
                                        <h4>Product Details</h4>
                                        <div class="form-group row">
                                            <div class="col-xl-2 col-md-4">
                                                <label for="validationCustom0"> Product Name <span>*</span></label>
                                            </div>
                                            <div class="col-xl-4 col-md-7">
                                                <input class="form-control " name="name" maxlength="120" id="p_name"
                                                    placeholder="Enter Product Name" type="text">
                                                @if ($errors->has('name'))
                                                    <span style="color: red;"
                                                        class="invalid-feedback1 font-weight-bold">{{ $errors->first('name') }}</span
                                                        style="color: red;">
                                                @endif
                                            </div>
                                        
                                            <div class="col-xl-2 col-md-4">
                                                <label for="validationCustom0"> Product Price <span>*</span></label>
                                            </div>
                                            <div class="col-xl-4 col-md-7">
                                                <input class="form-control " name="price"
                                                                maxlength="12" id="validationCustom0"
                                                                placeholder="Enter Sale Price" type="text"
                                                                onkeypress ="return onlyDecimalNumberKey(event)">
                                                            @if ($errors->has('price'))
                                                                <span style="color: red;"
                                                                    class="invalid-feedback1 font-weight-bold">{{ $errors->first('price') }}</span
                                                                    style="color: red;">
                                                            @endif
                                                @if ($errors->has('name'))
                                                    <span style="color: red;"
                                                        class="invalid-feedback1 font-weight-bold">{{ $errors->first('name') }}</span
                                                        style="color: red;">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-xl-2 col-md-4">
                                                <label for="validationCustom0"> Product Quantity <span>*</span></label>
                                            </div>
                                            <div class="col-xl-4 col-md-7">
                                                <input class="form-control " name="quantity"
                                                                maxlength="12" id="validationCustom0"
                                                                placeholder="Enter Product Quantity" type="text"
                                                                onkeypress ="return onlyNumberKey(event)">
                                                            @if ($errors->has('quantity'))
                                                                <span style="color: red;"
                                                                    class="invalid-feedback1 font-weight-bold">{{ $errors->first('quantity') }}</span
                                                                    style="color: red;">
                                                            @endif
                                               
                                            </div>
                                        
                                            <div class="col-xl-2 col-md-4">
                                                <label for="validationCustom0"> Select Category <span>*</span></label>
                                            </div>
                                            <div class="col-xl-4 col-md-7">
                                                        <select id="category_id" name="category_id" 
                                                            class="form-control">

                                                            @foreach ($categories as $key => $value)
                                                                <option value="{{ $key }}">{{ $value }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('category_id'))
                                                            <span style="color: red;"
                                                                class="invalid-feedback1 font-weight-bold">{{ $errors->first('category_id') }}</span
                                                                style="color: red;">
                                                        @endif
                                                    </div>
                                        </div>
                                        


                                        <div class="form-group row">
                                            <div class="col-xl-2 col-md-4">
                                                <label for="validationCustom1"> Make <span>*</span></label>
                                            </div>
                                            <div class="col-xl-4 col-md-7">
                                                @if (Auth::User()->role == 'Admin')
                                                    <select id="vendors" name="created_by"
                                                        class="form-control fstdropdown-select"
                                                        onchange="ChangeMakeCondition(this.value)">
                                                        @foreach ($vendors as $key => $value)
                                                            <option value="{{ $key }}">{{ $value }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <input type="hidden" name="make" class="form-control"
                                                        value="{{ Auth::User()->name }}">
                                                @else
                                                    <input type="text" id="make1" class="form-control"
                                                        value="{{ Auth::User()->name }}" disabled>
                                                    <input type="hidden" name="make" class="form-control"
                                                        value="{{ Auth::User()->name }}">
                                                    <input type="hidden" name="created_by" class="form-control"
                                                        value="{{ Auth::User()->id }}">
                                                @endif

                                                @if ($errors->has('make'))
                                                    <span style="color: red;"
                                                        class="invalid-feedback1 font-weight-bold">{{ $errors->first('make') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-xl-2 col-md-4">
                                                <label for="validationCustom1"> Feature Image <span>*</span></label>
                                            </div>
                                            <div class="col-xl-3 col-md-2">
                                                <input class="form-control " name="image" id="imageshow"
                                                    type="file">
                                                @if ($errors->has('image'))
                                                    <span style="color: red;"
                                                        class="invalid-feedback1 font-weight-bold">{{ $errors->first('image') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-md-6 col-md-5">
                                                <img src="" alt="No Select Feature Image" class=""
                                                    id="show_image" width="100px" height="80px">
                                            </div>
                                        </div>


                                       
                                </div>

                                <div class="tab-pane fade " id="permission" role="tabpanel"
                                    aria-labelledby="permission-tabs">
                                    <span class="needs-validation user-add" novalidate="">
                                        <div class="permission-block">
                                            <div class="attribute-blocks">
                                                <h5 class="f-w-600 mb-3">Product Prices <span
                                                        style="color: black; font-size:smaller;">(optional)</span></h5>
                                                <div class="row">
                                                    <div class="form-group row">
                                                        <div class="col-xl-2 col-md-4">
                                                            <label for="validationCustom0"><span></span> Old Price</label>
                                                        </div>
                                                        <div class="col-xl-4 col-md-7">
                                                            <input class="form-control " name="new_price" maxlength="12"
                                                                id="validationCustom0"
                                                                placeholder="Enter Old Price (must be greater than the sale price)"
                                                                type="text"
                                                                onkeypress ="return onlyDecimalNumberKey(event)">
                                                            @if ($errors->has('new_price'))
                                                                <span style="color: red;"
                                                                    class="invalid-feedback1 font-weight-bold">{{ $errors->first('new_price') }}</span
                                                                    style="color: red;">
                                                            @endif
                                                        </div>
                                                        <br><br><br>

                                                        <div class="col-xl-2 col-md-4">
                                                            <label for="validationCustom0"><span></span> Sale Price</label>
                                                        </div>
                                                        <div class="col-xl-4 col-md-7">
                                                            <input class="form-control " name="price"
                                                                maxlength="12" id="validationCustom0"
                                                                placeholder="Enter Sale Price" type="text"
                                                                onkeypress ="return onlyDecimalNumberKey(event)">
                                                            @if ($errors->has('price'))
                                                                <span style="color: red;"
                                                                    class="invalid-feedback1 font-weight-bold">{{ $errors->first('price') }}</span
                                                                    style="color: red;">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                 

                                            
                                                <hr>
                                                
                                                <hr>

                                            </div>
                                    </span>
                                </div>

                            </div>
                            <div class="tab-pane fade " id="category" role="tabpanel" aria-labelledby="category-tabs">
                                
                            </div>

                            <div class="tab-pane fade " id="dimention" role="tabpanel" aria-labelledby="dimention-tabs">
                                <span class="needs-validation user-add" novalidate="">
                                    <div class="permission-block">
                                        <div class="attribute-blocks">
                                            <h5 class="f-w-600 mb-3">Product Measurement <span
                                                    style="color: black; font-size:smaller;">(optional)</span></h5>
                                            <div class="row">
                                                <div class="form-group row">
                                                    <div class="col-xl-1 col-md-4">
                                                        <label for="validationCustom0"> Select Unit:</label>
                                                    </div>
                                                    <div class="col-xl-2 col-md-7">
                                                        <select class="form-control" name="m_unit" id="m_unit"
                                                            onchange="mesurement()">
                                                            <option value="" selected>Select Measurement Unit:
                                                            </option>
                                                            <option value="Millimeter">Millimeter(mm)</option>
                                                            <option value="Centimeter">Centimeter(cm)</option>
                                                            <option value="Inch">Inch(in)</option>
                                                            <option value="Meter">Meter(m)</option>
                                                        </select>
                                                    </div>
                                                    <br><br><br>

                                                    <div class="col-xl-1 col-md-4">
                                                        <label for="validationCustom0"> Width:</label>
                                                    </div>
                                                    <div class="col-xl-2 col-md-7">
                                                        <input class="form-control " disabled name="width"
                                                            maxlength="5" id="w" placeholder="" type="text"
                                                            onkeypress ="return onlyDecimalNumberKey(event)">
                                                    </div>

                                                    <br><br><br>

                                                    <div class="col-xl-1 col-md-4">
                                                        <label for="validationCustom0"> Height:</label>
                                                    </div>
                                                    <div class="col-xl-2 col-md-7">
                                                        <input class="form-control " disabled name="height"
                                                            maxlength="5" id="h" placeholder="" type="text"
                                                            onkeypress ="return onlyDecimalNumberKey(event)">
                                                    </div>

                                                    <br><br><br>

                                                    <div class="col-xl-1 col-md-4">
                                                        <label for="validationCustom0"> Depth:</label>
                                                    </div>
                                                    <div class="col-xl-2 col-md-7">
                                                        <input class="form-control " disabled name="depth"
                                                            maxlength="5" id="d" placeholder="" type="text"
                                                            onkeypress ="return onlyDecimalNumberKey(event)">
                                                    </div>

                                                    <br><br><br>

                                                </div>
                                            </div>


                                        </div>


                                        <div class="attribute-blocks">
                                            <h5 class="f-w-600 mb-3">Product Weight <span
                                                    style="color: black; font-size:smaller;">(optional)</span></h5>
                                            <div class="row">
                                                <div class="form-group row">
                                                    <div class="col-xl-1 col-md-4">
                                                        <label for="validationCustom0"> Select Unit:</label>
                                                    </div>
                                                    <div class="col-xl-2 col-md-7">
                                                        <select class="form-control" name="weight_unit" id="weight_unit"
                                                            onchange="weightunit()">
                                                            <option value="" selected>Select Weight Unit:</option>
                                                            <option value="Ounce">Ounce(oz)</option>
                                                            <option value="Milligram">Milligram(mg)</option>
                                                            <option value="Gram">Gram(g)</option>
                                                            <option value="Kilogram">Kilogram(kg)</option>
                                                            <option value="MetricTon">Metric Ton(t)</option>
                                                        </select>

                                                    </div>
                                                    <br><br><br>

                                                    <div class="col-xl-1 col-md-4">
                                                        <label for="validationCustom0"> Width:</label>
                                                    </div>
                                                    <div class="col-xl-2 col-md-7">
                                                        <input class="form-control" disabled name="weight"
                                                            maxlength="5" id="weight1" placeholder="" type="text"
                                                            onkeypress ="return onlyDecimalNumberKey(event)">
                                                    </div>

                                                    <br><br><br>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </span>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>

                            {{-- <div class="tab-pane fade " id="tax" role="tabpanel" aria-labelledby="tax-tabs">
                                    <h1>tax</h1>
                                </div> --}}


                            <div class="tab-pane fade" id="description" role="tabpanel"
                                aria-labelledby="description-tabs">
                                <span class="needs-validation user-add" novalidate="">
                                    <div class="permission-block">

                                        <div class="attribute-blocks">
                                            <h5 class="f-w-600 mb-3"><span style="color: red;">*</span> Product
                                                Description </h5>
                                            <div class="digital-add needs-validation">
                                                <div class="form-group mb-0">
                                                    <div class="description-sm">
                                                        <textarea id="" name="description" maxlength="1000" cols="10" rows="5"></textarea>
                                                        @if ($errors->has('description'))
                                                            <span style="color: red;"
                                                                class="invalid-feedback1 font-weight-bold text-danger">{{ $errors->first('description') }}</span
                                                                style="color: red;">
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="attribute-blocks">
                                            <h5 class="f-w-600 mb-3">Product detail <span
                                                    style="color: black; font-size:smaller;">(optional)</span></h5>
                                            <div class="digital-add needs-validation">
                                                <div class="form-group mb-0">
                                                    <div class="description-sm">
                                                        <textarea id="editor1" name="details" cols="10" rows="4"></textarea>
                                                        {{-- <div id="editor">
                                                                    <p>Hello World!</p>
                                                                    </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </span>

                            </div>




                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
