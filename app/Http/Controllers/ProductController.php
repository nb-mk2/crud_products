<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;


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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0',
        ]);

        Products::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Producto creado con éxito!');
    }

  
    public function show(Products $products)
    {
        return view('products.show', compact('products'));
    }

    
    public function edit(Products $products)
    {
        return view('products.edit', compact('products'));
    }

   
    public function update(Request $request, Products $products)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0',
        ]);

        $products->update($request->all());

        return redirect()->route('products.index')->with('success', 'Producto actualizado con éxito!');
    }


    public function destroy(Products $products)
    {
        $products->delete();

        return redirect()->route('products.index')->with('success', 'Producto eliminado con éxito!');
    }
}
