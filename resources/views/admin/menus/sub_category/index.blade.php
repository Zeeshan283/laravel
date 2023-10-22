@extends('layout.app')

@section('content')
<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Sub Category List
                                    {{-- <small>Bigdeal Admin panel</small> --}}
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Sub Categorys</li>
                                <li class="breadcrumb-item active">Sub Category List</li>
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
                        <h5>Sub Category Lists</h5>
                        <a href="{{route('sub_categories.create')}}"><button class="btn btn-primary" id="showButton">Add Sub Category</button></a>
                    </div>
                    <div class="card-body Sub Category-table">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category</th>
                                <th>Sub Category Name</th>
                                {{-- <th>Commission Type</th> --}}
                                {{-- <th>Commission</th> --}}
                                <th>Image</th>
                                <th>ImageForApp</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->categories->name }}</td>
                                <td>{{ $item->name }}</td>
                                {{-- <td>{{ $item->commission_type }}</td> --}}
                                {{-- <td>{{ $item->commission }}</td> --}}
                                <td>
                                    <div class="d-flex Category-list">
                                        <img src="{{asset($item->img)}}" alt="N/A" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex Category-list">
                                        <img src="{{asset($item->imageforapp)}}" alt="N/A" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <a href="{{ route('sub_categories.edit', ['sub_category' => $item->id]) }}">
                                        <i class="fa fa-edit me-2 font-success"></i></a>
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