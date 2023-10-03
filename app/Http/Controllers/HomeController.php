<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('menu.index');
    }
    public function about()
    {
        return view('menu.about-us');
    }
    
    public function bbs()
    {
        return view('menu.blog-both-sidebar');
    }
    public function bdls()
    {
        return view('menu.blog-detail-left-sidebar');
    }

    public function faq()
    {
        return view('menu.faq');
    }

    public function menus()
    {
        return view('menus.our-menu-4');
    }
    
    public function reservation()
    {
        return view('menu.reservation');
    }
    public function contact()
    {
        return view('menu.contact-us');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function profile()
    {
        return view('admin.profile');
    }

  

    
}
