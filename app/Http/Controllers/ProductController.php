<?php

namespace App\Http\Controllers;

use App\Models\Product;  // Menggunakan nama model yang benar (Pastikan modelnya bernama 'Product')
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact(var_name: 'products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'image' => 'required|string',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'dimensions' => 'required|array',
            'dimensions.width' => 'required|numeric',
            'dimensions.height' => 'required|numeric',
            'is_featured' => 'required|boolean',
        ]);

        $is_active = $request->stock >= 2 ? true : false;

        Product::create([
            'image' => $request->image,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'dimensions' => $request->dimensions,
            'is_active' => $is_active,
            'is_featured' => $request->is_featured,
        ]);
        // dd($request->all());
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));  // Tampilkan form edit produk
    }

    public function update(Request $request, Product $product)
    {
        // Validasi input
        $request->validate([
            'image' => 'required|string',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'dimensions' => 'required|array',
            'dimensions.width' => 'required|numeric',
            'dimensions.height' => 'required|numeric',
            'is_featured' => 'required|boolean',
        ]);

        // Menetapkan nilai 'is_active' berdasarkan stok
        $isActive = $request->stock > 2 ? true : false;

        // Update produk dengan data baru
        $product->update([
            'image' => $request->image,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'dimensions' => $request->dimensions,
            'is_featured' => $request->is_featured,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        // Hapus produk dari database
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
