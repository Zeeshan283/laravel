@extends('admin.admin_layouts.app')

@section('content')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Product List
                                {{-- <small>Bigdeal Admin panel</small> --}}
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Products</li>
                            <li class="breadcrumb-item active">Product List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Product Lists</h5>
                        <a href="{{ route('products.create') }}"><button class="btn btn-primary" id="showButton">Add
                                Product</button></a>
                    </div>
                </div>
                <div class="card-body Product-table">
                    <table class="display" id="basic-1">
                        <thead>
                            <tr>
                                <th>Sr No</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Supplier</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        </td>
                                    <td></td>
                                    <td><img src="{{ asset($item->url) }}" alt="N/A" width="80px" height="50px">
                                    </td>
                                    <td>
                                        <div>
                                            <a href=" {{ route('products.edit', ['product' => $item->id]) }} ">
                                                <i class="fa fa-edit me-2 font-success"></i>
                                            </a>
                                            <i class="fa fa-trash font-danger"></i>
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
