<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = "";
        if (Auth::User()->role == 'Admin') {
            
            $products = Product::count();
            
            $customers = User::where('role', '=', 'Customer')->count();
            $vendors = User::where('role', '=', 'Vendor')->count();
            $isAdmin = Auth::user()->role == 'Admin';
            return view(
                'admin.dashboard.dashboard',
                compact(
                    'products',
                    'customers',
                    'vendors',
                    'isAdmin',
                )
            );
        } else {
            
            $products = Product::where('created_by', Auth::User()->id)->count();
            $customers = User::where('role', '=', 'Customer')->count();
            $vendors = User::where('role', '=', 'Vendor')->count();
            $isAdmin = Auth::user();

            return view(
                'admin.dashboard.dashboard',
                compact(
                    'products',
                    'customers',
                    'vendors',
                    'isAdmin',
                )
            );
        }
    }
    
    // public function index()
    // {
    //     return view('admin.index');
    // }

    // public function sub_category()
    // {
    //     return view('admin.category-sub');
    // }

    // public function products()
    // {
    //     return view('admin.product-list');
    // }

    public function pdetails()
    {
        return view('admin.product-detail');
    }

    // public function addproduct()
    // {
    //     return view('admin.add-product');
    // }
    // public function userlist()
    // {
    //     return view('admin.user-list');
    // }

    // public function createuser()
    // {
    //     return view('admin.create-user');
    // }

    public function slider()
    {
        return view('slider.slider');
    }
    public function p_details()
    {
        return view('menu.product-detail');
    }
    
}