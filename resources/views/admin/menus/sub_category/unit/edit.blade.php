@extends('layout.app')

@section('content')

<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <div class="page-header-left">
                                <h3>Unit Management's
                                    {{-- <small>Bigdeal Admin panel</small> --}}
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="/"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Units</li>
                                <li class="breadcrumb-item active">Edit Unit</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid " id="showDiv">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Edit Unit</h5>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" method="POST"  action="{{ route('units.update', ['unit' => $edit->id]) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        
                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Unit Name</label>    
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" name="name" value="{{ $edit->name }}" id="validationCustom0" Unit="text" required>     
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary  d-block">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        
            <!-- Container-fluid Ends-->
</div>
@endsection