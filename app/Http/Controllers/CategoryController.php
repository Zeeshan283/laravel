<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{

 
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Category::select('id', 'name')->orderBy('id', 'desc')->get();
        return view('admin.category.index', compact('data'));
    }

    public function create()
    {
        // $data = $this->fontIndex();
        return view('admin.category.index');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            // 'image' => 'mimes:png,jpg,jpeg',
            // 'imageforapp' => 'mimes:png,jpg,jpeg'
        ]);

        $menu =  new Category;
        $menu->name = $request->name;
        $menu->discription = $request->discription;
        $menu->save();

        // Toastr::success('Menu Added Successfully!');
        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $edit = Category::findOrFail($id);
        return view('admin.category.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $update = Category::findOrFail($id);
        $update->name = $request->input('name');
        $update->discription = $request->input('discription');
        $update->update();

        
        Toastr::success('Menu Updated Successfully!');
        return redirect()->route('menus.index');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        // Handle image deletion if needed
        $menu->delete();
        Toastr::success('Category Deleted Successfully!');
        return redirect()->route('categories.index');
    }


    // public function index()
    // {
    //     return view('admin.category.index');
    // }

    // public function create()
    // {
    //     return view('admin.addcat');
    // }
}