<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function category()
    {
        return view('admin.category');
    }
    public function sub_category()
    {
        return view('admin.category-sub');
    }

    public function products()
    {
        return view('admin.product-list');
    }

    public function pdetails()
    {
        return view('admin.product-detail');
    }

    public function addproduct()
    {
        return view('admin.add-product');
    }
    public function userlist()
    {
        return view('admin.user-list');
    }

    public function createuser()
    {
        return view('admin.create-user');
    }

    public function slider()
    {
        return view('slider.slider');
    }
    public function p_details()
    {
        return view('menu.product-detail');
    }
}
