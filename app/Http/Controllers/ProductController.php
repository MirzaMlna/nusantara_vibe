<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }
    public function store(Request $request)
    {
        // Simpan data produk baru
    }

    public function show($id)
    {
        // Tampilkan detail produk berdasarkan ID
    }

    public function edit($id)
    {
        // Form untuk mengedit produk
    }

    public function update(Request $request, $id)
    {
        // Perbarui data produk
    }

    public function destroy($id)
    {
        // Hapus produk
    }
}
