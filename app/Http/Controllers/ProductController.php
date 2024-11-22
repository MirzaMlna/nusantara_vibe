<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'dimensions' => 'nullable|array',
            'dimensions.length' => 'nullable|numeric',
            'dimensions.width' => 'nullable|numeric',
            'dimensions.height' => 'nullable|numeric',
            'image' => 'nullable|string',
        ]);

        Products::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'dimensions' => $request->dimensions,
            'is_active' => true,
            'image' => $request->image,
            'description' => $request->description,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Products $product)
    {
        return view('products.edit', compact('product')); // Tampilkan form edit produk
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, Products $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'dimensions' => 'nullable|array',
            'dimensions.length' => 'nullable|numeric',
            'dimensions.width' => 'nullable|numeric',
            'dimensions.height' => 'nullable|numeric',
            'image' => 'nullable|string',
        ]);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'dimensions' => $request->dimensions,
            'image' => $request->image,
            'description' => $request->description,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
