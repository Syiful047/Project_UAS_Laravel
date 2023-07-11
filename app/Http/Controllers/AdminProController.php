<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\AdminProController;

class AdminProController extends Controller
{
    // produk
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index', [
            'product' => $product
        ]);

    }
    public function create(){
        return view('admin.product.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'photo' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required'
        ]);
        Product::create([
            'name' => $request->name,
            'photo' => $request->photo,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
        ]);
        return redirect('/product');
    }
    public function edit($id){
        $product = Product::find($id);
        return view('admin.product.edit', [
            'product' => $product
        ]);
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'photo' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required'
        ]);
        $product = Product::find($id);
        $product->update([
            'name' => $request->name,
            'photo' => $request->photo,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
        ]);
        return redirect('/product')->with('success', 'Data product berhasil diubah.');
    }
    public function destroy(Request $request){
        Product::destroy($request->id);

        return redirect('/product')->with('success', 'Data product berhasil dihapus.');
    }
}
