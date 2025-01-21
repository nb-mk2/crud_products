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

  
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

   
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
