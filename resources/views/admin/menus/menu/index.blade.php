@extends('layout.app')

@section('content')
<div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Menu List
                                    {{-- <small>Bigdeal Admin panel</small> --}}
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Menus</li>
                                <li class="breadcrumb-item active">Menu List</li>
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
                        <h5>Menu Lists </h5>
                        <a href="{{route('menus.create')}}"><button class="btn btn-primary" id="showButton">Add Menu</button></a>
                        
                    </div>
                    <div class="card-body Menu-table">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Menus Name</th>
                                <th>Icon</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                    
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$item->name}}</td>
                                <td>
                                    <div class="d-flex Menu-list">
                                       <i class="{{$item->icon}}"></i>   
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <a href="{{  route('menus.edit', ['menu' => $item->id])}}">
                                        <i class="fa fa-edit me-2 font-success"></i>
                                        </a>
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