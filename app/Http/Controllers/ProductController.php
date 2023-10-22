<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $data = "";
        if (Auth::User()->role == 'Admin') {
            $data = Product::
                OrderBy('id', 'desc')
                ->get();
        } else {
            $data = Product::with('product_image')
                ->with('categories:id,name')
                ->where('created_by', Auth::User()->id)
                ->OrderBy('id', 'desc')
                ->get();
        }


        return view('admin.products.index', compact('data'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->pluck('name', 'id')->prepend('Select Category', '');
        $vendors = User::select('id', 'name')
            ->whereRole('Vendor')
            ->pluck('name', 'id');
        // ->prepend($ActiveAdmin->name, $ActiveAdmin->id . '_' . $ActiveAdmin->name);

        return view('admin.products.create', compact('categories', 'vendors'));
    }


    public function store(Request $request)
    {
        $user = Auth::user();
        // dd($user);
        // dd($request->all());
        
            $this->validate(
                $request,
                [


                    'name' => 'required',
                    'make' => 'required',
                    // 'min_order' => 'required',
                    
                    'price' => 'nullable',
                    'image' => 'required',
                    // 'images.0' => 'required',
                    'description' => 'required',
                    'category_id' => 'required',

                ],
                [

                   
                ]

            );

            // dd($request->all());
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = uniqid() . '.' . $image->extension();
                $image->move('upload/product', $imageName);
            }

            $productData = $request->all();

            if ($request->hasFile('image')) {

                $productData['image'] = 'upload/product/' . $imageName;
            }


            $p = Product::create($productData);
            // $p = Product::create($request->all());

            // $p->created_by = Auth::User()->id;
            $p->save();



            // Toastr::success('Product Added successfully', 'Success');
            return redirect()->back();
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $edit = Product::with('shipping_details')
            ->with('locations')
            ->with('conditions')
            ->with('colors')
            ->with('product_images')
            // ->where('created_by', Auth::User()->id)
            ->findOrFail($id);
        // dd($edit);
        if ($edit) {
            $brands = Brand::OrderBy('brand_name')->pluck('brand_name', 'id')->prepend('Select Brand', '');
            $menus = Menu::orderBy('name')->pluck('name', 'id')->prepend('Select Menu', '');
            $categories = Category::orderBy('name')->pluck('name', 'id')->prepend('Select Category', '');
            $sub_categories = SubCategory::orderBy('name')->pluck('name', 'id')->prepend('Select Sub Category', '');
            $types = SubCatType::orderBy('name')->pluck('name', 'id')->prepend('Select Sub Category Type', '');
            $materials = SubCatMaterial::orderBy('name')->pluck('name', 'id')->prepend('Select Sub Category Material', '');
            $units = SubCatUnit::orderBy('name')->pluck('name', 'id')->prepend('Select Sub Category Unit', '');

            $tax_title = TaxTitle::pluck('name', 'id')->prepend('Select Tax Title', '');



            $colors = Color::orderBy('id')->get(['name', 'id']);

            $vendors = User::select('id', 'name')
                ->whereRole('Vendor')
                ->pluck('name', 'id');

            return view('products.edit', compact('edit', 'brands', 'menus', 'categories', 'sub_categories',  'colors', 'types', 'vendors', 'tax_title', 'materials', 'units'));
        } else {
            abort(404);
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [

                'name' => 'required',
                'make' => 'required',
                // 'min_order' => 'required',
                // 'feature_image' => 'required',
                'sku' => 'required',
                'new_price' => 'nullable|gt:new_sale_price',
                'new_sale_price' => 'nullable',
                'refurnished_price' => 'nullable|gt:refurnished_sale_price',
                'refurnished_sale_price' => 'nullable',
                'description' => 'required',
                // 'attachment' => 'mimes:pdf,zip|max:20480',
                'menu_id' => 'required',
                'category_id' => 'required',
                'subcategory_id' => 'required',
                'brand_id' => 'required',

            ],
            [
                'name.required' => 'The Product name field is required',
                'make.required' => 'The Make field is required',
                'sku.exists' => 'The SKU already exist',
                'new_sale_price.lte' => 'Sale price must be less than or equal to the old price.',
                'refurnished_sale_price.lte' => 'Refurbished Sale price must be less than or equal to the old Refurbished price.',
                'feature_image.required' => 'The Feature Image field is required',
                // 'images.0.required' => 'The Image field is required',
                'description.required' => 'The Description field is required',
                'brand_id.required' => 'The Brand field is required',
                'menu_id.required' => 'The Menu field is required',
                'category_id.required' => 'The Category field is required',
                'subcategory_id.required' => 'The Sub Category field is required',
            ]

        );


        $edit = Product::findOrFail($id);

        if ($request->hasFile('feature_image')) {
            $image = $request->file('feature_image');
            $imageName = uniqid() . '.' . $image->extension();
            $image->move('upload/product', $imageName);
        }

        $productData = $request->all();

        if ($request->hasFile('feature_image')) {
            $productData['url'] = 'upload/product/' . $imageName;
            $productData['feature_image'] = 'upload/product/' . $imageName;
        }

        $edit->update($productData);

        $edit->slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        // $edit->updated_by = Auth::User()->id;
        $edit->save();

        if (isset($request->colors)) {
            if (count($request->colors) > 0) {
                ProductColors::where('pro_id', $id)->delete();

                for ($i = 0; $i < count($request->colors); $i++) {
                    $ProductColors = new ProductColors();
                    $ProductColors->pro_id = $edit->id;
                    $ProductColors->color_id = $request->colors[$i];
                    $ProductColors->save();
                }
            }
        }
        if ($request->hasFile('images')) {
            if (count($request->images) > 0) {

                ProductImages::where('pro_id', $id)->delete();



                for ($i = 0; $i < count($request->images); $i++) {
                    $pImages = new ProductImages();
                    $pImages->pro_id = $edit->id;

                    // Get the uploaded image file
                    $uploadedImage = $request->images[$i];

                    // Generate a unique filename for the image
                    $imageName = uniqid() . '_' . $uploadedImage->getClientOriginalName();

                    // Move the uploaded image to the "upload" folder
                    $uploadedImage->move('upload/product', $imageName);

                    // Save the image details
                    $pImages->image = $imageName;
                    $pImages->url =  'upload/product/' . $imageName; // Adjust this URL as needed
                    $pImages->save();
                }
            }
        }

        if ($request->hasFile('attachment')) {
            File::delete('upload/product/attachments/' . $edit->attachment);

            $file = $request->file('attachment');
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move('upload/product/attachments', $fileName);
            $edit->attachment = 'upload/product/attachments/' . $fileName;
            $edit->save();
        }

        return redirect('products')->with(Toastr::success('Product Updated Successfully!'));
    }

    public function dupe($id)
    {

        $edit = Product::with('shipping_details')
            ->with('locations')
            ->with('conditions')
            ->with('colors')
            ->with('product_images')
            // ->where('created_by', Auth::User()->id)
            ->findOrFail($id);
        if ($edit) {
            $brands = Brand::OrderBy('brand_name')->pluck('brand_name', 'id')->prepend('Select Brand', '');
            $menus = Menu::orderBy('name')->pluck('name', 'id')->prepend('Select Menu', '');
            $categories = Category::orderBy('name')->pluck('name', 'id')->prepend('Select Category', '');
            $sub_categories = SubCategory::orderBy('name')->pluck('name', 'id')->prepend('Select Sub Category', '');
            $locations = Locations::orderBy('id')->get(['id', 'name']);
            $conditions = Conditions::orderBy('id')->get(['name', 'id']);
            $type = array('Parent' => 'Parent', 'Child' => 'Child');
            $productsList = Product::whereType('parent')->orderBy('name')->pluck('model_no', 'id');
            $colors = Color::orderBy('id')->get(['name', 'id']);

            return view('products.dupe', compact('edit', 'brands', 'menus', 'categories', 'sub_categories', 'locations', 'type', 'productsList', 'conditions', 'colors'));
        } else {
            abort(404);
        }
    }

    public function duplicate(Request $request, $id)
    {
        $this->validate(
            $request,
            [

                'name' => 'required',
                'make' => 'required',
                // 'min_order' => 'required',
                'attachment' => 'mimes:pdf,zip|max:20480',
                'sku' => 'required|unique:products',
                'new_price' => 'nullable|gt:new_sale_price',
                'new_sale_price' => 'nullable',
                'refurnished_price' => 'nullable|gt:refurnished_sale_price',
                'refurnished_sale_price' => 'nullable',
                'description' => 'required',
                // 'images.0' => 'required',
                'feature_image' => 'required',
                'menu_id' => 'required',
                'category_id' => 'required',
                'subcategory_id' => 'required',
                'brand_id' => 'required',

            ],
            [
                'name.required' => 'The Product name field is required',
                'make.required' => 'The Make field is required',
                'sku.exists' => 'The SKU already exist',
                'new_sale_price.lte' => 'Sale price must be less than or equal to the old price.',
                'refurnished_sale_price.lte' => 'Refurbished Sale price must be less than or equal to the old Refurbished price.',
                // 'images.0.required' => 'The Image field is required',
                'description.required' => 'The Description field is required',
                'feature_image.required' => 'The Feature Image field is required',
                'brand_id.required' => 'The Brand field is required',
                'menu_id.required' => 'The Menu field is required',
                'category_id.required' => 'The Category field is required',
                'subcategory_id.required' => 'The Sub Category field is required',
            ]

        );

        // dd($request->all());
        // $p = Product::findOrFail($id);

        if ($request->hasFile('feature_image')) {
            $image = $request->file('feature_image');
            $imageName = uniqid() . '.' . $image->extension();
            $image->move('upload/products', $imageName);
        }

        $productData = $request->all();

        if ($request->hasFile('feature_image')) {
            $productData['url'] = asset('upload/products/' . $imageName);
            $productData['feature_image'] = $imageName;
        }

        $p = Product::create($productData);


        // $p = Product::create($request->all());

        if ($request->type == 'Child') {
            $p->parent_id = $request->parent_id;
        } else {
            $p->parent_id = $p->id;
        }

        $p->slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name)));
        $p->created_by = Auth::User()->id;
        $p->save();

        if (isset($request->condition)) {
            for ($i = 0; $i < count($request->condition); $i++) {
                $ProductConditions = new ProductConditions();
                $ProductConditions->pro_id = $p->id;
                $ProductConditions->condition_id = $request->condition[$i];
                $ProductConditions->save();
            }
        }

        if (isset($request->colors)) {
            if (count($request->colors) > 0) {
                ProductColors::where('pro_id', $id)->delete();

                for ($i = 0; $i < count($request->colors); $i++) {
                    $ProductColors = new ProductColors();
                    $ProductColors->pro_id = $p->id;
                    $ProductColors->color_id = $request->colors[$i];
                    $ProductColors->save();
                }
            }
        }

        // if (count($request->images) > 0) {
        //     for ($i = 0; $i < count($request->images); $i++) {
        //         $pImages = new ProductImages();
        //         $pImages->pro_id = $p->id;
        //         $pImages->image = $request->images[$i];
        //         $pImages->url = 'root/upload/products/'.$request->images[$i];
        //         $pImages->save();
        //     }
        // }
        if ($request->hasFile('images')) {
            if (count($request->images) > 0) {
                for ($i = 0; $i < count($request->images); $i++) {
                    $pImages = new ProductImages();
                    $pImages->pro_id = $p->id;
                    $uploadedImage = $request->images[$i];
                    $imageName = uniqid() . '_' . $uploadedImage->getClientOriginalName();
                    $uploadedImage->move('upload/products', $imageName);

                    $pImages->image = $imageName;
                    $pImages->url =  url('upload/products/' . $imageName);
                    $pImages->save();
                }
            }
        }

        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move('upload/products/attachments', $fileName);
            $p->attachment = $fileName;
            $p->save();
        }

        Toastr::success('Product Duplicated Successfully!', 'Success');
        return redirect()->back();
        // return redirect()->back()->with(Toastr::success('Product Duplicated Successfully!','success'));

    }


    public function destroy($id)
    {
        $pro = Product::findOrFail($id);

        File::delete('upload/products/attachments/' . $pro->attachment);
        $pro->delete();

        ProductConditions::where('pro_id', $id)->delete();
        $pImages = ProductImages::where('pro_id', $id)->get();
        foreach ($pImages as $value) {
            File::delete('upload/products/' . $value->image);
        }
        ProductImages::where('pro_id', $id)->delete();
        ProductLocations::where('pro_id', $id)->delete();
        ProductSizes::where('pro_id', $id)->delete();
        ProductShippment::where('pro_id', $id)->delete();

        // Toastr::success('Product Deleted successfully', 'Success');
        return redirect()->back()->with(Toastr::success('Product Deleted Successfully!'));
    }



    // public function index()
    // {
    //     return view('admin.products.index');
    // }

    // // Show the form for creating a new product
    // public function create()
    // {
    //     return view('admin.products.create');
    // }

    // // Store a newly created product in the database
    // public function store(Request $request)
    // {
    //     // Validation and storing logic here
    // }

    // // Display the specified product
    // public function show()
    // {
    //     return view('admin.products.show', compact('product'));
    // }

    // // Show the form for editing the specified product
    // public function edit()
    // {
    //     return view('admin.products.edit', compact('product'));
    // }

    // // Update the specified product in the database
    // public function update()
    // {
    //     // Validation and updating logic here
    // }

    // // Remove the specified product from the database
    // public function destroy()
    // {

    // }

}