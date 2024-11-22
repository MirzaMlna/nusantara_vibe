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
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'dimensions' => 'required|array',
            'dimensions.width' => 'required|numeric',
            'dimensions.height' => 'required|numeric',
            'image' => 'required|string',
            'description' => 'nullable|string',  // Tambahkan validasi untuk description jika diperlukan
        ]);

        $isActive = $request->stock >= 2 ? true : false;

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'dimensions' => $request->dimensions,  // Menyimpan dalam bentuk JSON
            'is_active' => $isActive,
            'image' => $request->image,
            'description' => $request->description,  // Menyimpan deskripsi jika ada
        ]);

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
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'dimensions' => 'required|array',
            'dimensions.width' => 'required|numeric',
            'dimensions.height' => 'required|numeric',
            'image' => 'required|string',
            'description' => 'nullable|string',
        ]);

        // Menetapkan nilai 'is_active' berdasarkan stok
        $isActive = $request->stock > 2 ? true : false;

        // Update produk dengan data baru
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'dimensions' => $request->dimensions,  // Menyimpan dalam bentuk JSON
            'is_active' => $isActive,
            'image' => $request->image,
            'description' => $request->description,  // Menyimpan deskripsi jika ada
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
