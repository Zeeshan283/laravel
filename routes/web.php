<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes(['verify' => true]);



Route::middleware(['auth', 'verified'])->group(function () {

        // Route::get('/',[HomeController::class, 'index'])->name('home');
        Route::get('/about-us',[HomeController::class, 'about'])->name('about');
        Route::get('/blog-both-sidebar',[HomeController::class, 'bbs'])->name('bbs');
        Route::get('/blog-detail-left-sidebar',[HomeController::class, 'bdls'])->name('bdsl');
        Route::get('/faq',[HomeController::class, 'faq'])->name('faq');
        Route::get('/menus',[HomeController::class,'menus'])->name('menus');
        Route::get('/reservation',[HomeController::class,'reservation'])->name('reservation');
        Route::get('/contact-us',[HomeController::class,'contact'])->name('contact-us');
        Route::get('/dashboard', [AdminController::class,'index'])->name('admin');
        Route::get('/products', [AdminController::class,'products'])->name('products');
        Route::get('/pdetails', [AdminController::class,'pdetails'])->name('pdetails');
        Route::get('/addproduct', [AdminController::class,'addproduct'])->name('addproduct');
        Route::get('/userlist', [AdminController::class,'userlist'])->name('userlist');
        Route::get('/createuser', [AdminController::class,'createuser'])->name('createuser');
        Route::get('/slider', [AdminController::class,'slider'])->name('slider');
        // Route::get('/category',[AdminController::class,'cat'])->name('cat');
        Route::get('/details',[AdminController::class,'p_details'])->name('p_details');
        Route::get('/profile',[HomeController::class,'profile'])->name('profile');

        Route::resource('products', ProductController::class);


        // Route::get('login', [HomeController::class,'login'])->name('login');



        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        Route::resource('categories',CategoryController::class);

});