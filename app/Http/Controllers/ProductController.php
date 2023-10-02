<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product.index');
    }

    // Show the form for creating a new product
    public function create()
    {
        return view('product.create');
    }

    // Store a newly created product in the database
    public function store(Request $request)
    {
        // Validation and storing logic here
    }

    // Display the specified product
    public function show()
    {
        return view('products.show', compact('product'));
    }

    // Show the form for editing the specified product
    public function edit()
    {
        return view('products.edit', compact('product'));
    }

    // Update the specified product in the database
    public function update()
    {
        // Validation and updating logic here
    }

    // Remove the specified product from the database
    public function destroy()
    {

    }}
