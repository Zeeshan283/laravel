@extends('layout.app')

@section('content')

<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <div class="page-header-left">
                                <h3>Type Management's
                                    {{-- <small>Bigdeal Admin panel</small> --}}
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="/"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Types</li>
                                <li class="breadcrumb-item active">Type Management</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid d-none" id="showDiv">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Add Type</h5>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" method="POST"  action="{{ route('types.store') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Sub Category</label>    
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control" id="validationCustom0" name="sub_cat_id" required>
                                                @foreach($sub_cat as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>

                                        <div class="col-xl-3 col-md-2">
                                            <label for="validationCustom0" ><span>*</span>Type Name</label>    
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-control" name="name" id="validationCustom0" type="text" required>     
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

        


            <!-- Container-fluid starts-->
            
            
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                        <h5>Type Lists</h5>
                        <button class="btn btn-primary" id="showButton">Add Type</button>
                        
                    </div>
                    </div>
                    <div class="card-body Type-table">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Sr No</th>
                                <th>Sub Category</th>
                                <th>Type Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $item)
                            <tr>
                                
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->sub_categories->name }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <div>
                                        <a href="{{ route('types.edit', ['type' => $item->id]) }}">
                                        <i class="fa fa-edit me-2 font-success"></i></a>
                                        <a href="{{ route('type.destroy', $item->id) }}">
                                        <i class="fa fa-trash font-danger"></i></a>
                                        
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
</div>
@endsection