@extends('admin.admin_layouts.app')

@section('content')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Profile Management's
                                {{-- <small></small> --}}
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Setting</li>
                            <li class="breadcrumb-item active">My Profile</li>
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
                            <h5>Update Profile</h5>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('profiles.update', ['profile' => $edit->id]) }}"
                                enctype="multipart/form-data" class="needs-validation">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ $edit->id }}">
                                <div class="form-group row">
                                    <div class="col-xl-3 col-md-2">
                                        <label for="validationCustom0"><span>*</span>Name</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" name="name" value="{{ $edit->name }}"
                                            id="validationCustom0" type="text" required="">
                                    </div>
                                    <div class="col-xl-3 col-md-2">
                                        <label for="validationCustom0"><span>*</span>Restaurant Name</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" name="restaurant_name" id="validationCustom0"
                                            value="{{ $edit->restaurant_name }}" type="text">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-xl-3 col-md-2">
                                        <label for="validationCustom0"><span>*</span>Email</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" name="email" value="{{ $edit->email }}"
                                            id="validationCustom0" type="text" required="">
                                    </div>
                                    <div class="col-xl-3 col-md-2">
                                        <label for="validationCustom0"><span>*</span>Password</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" name="password" id="validationCustom0" value=""
                                            type="passsword">
                                    </div>
                                </div>
                                <br>

                                <div class="form-group row">

                                    <div class="col-xl-3 col-md-2">
                                        <label for="validationCustom0"><span>*</span>Profile Image</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="form-control" name="image" id="imageshow1" type="file">
                                    </div>

                                    <div class="col-xl-3 col-md-2">
                                        <label for="validationCustom0"><span>*</span>Image</label>
                                    </div>

                                    <div class="col-md-3">
                                        <img src="/{{ $edit->image }}" alt="N/A" class="img-fluid" id="show_image1"
                                            width="100%">
                                    </div>

                                </div>
                                <br>

                                <div style="text-align: -webkit-right;">
                                    <button type="submit" class="btn btn-primary d-block">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
