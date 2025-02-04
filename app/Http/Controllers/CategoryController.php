<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorys;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorys = Categorys::all();
        return view('categorys.index', compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorys.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
        ]);

        Categorys::create($request->all()); 

        return redirect()->route('categorys.index')->with('success', 'Categoria creada con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('categorys.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categorys $categorys)
    {
        $request->validate([
            'description' => 'required|string|max:255',
        ]);

        $categorys->update($request->all());

        return redirect()->route('categorys.index')->with('success', 'Categoria actualizado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorys $categorys)
    {
        $categorys->delete();

        return redirect()->route('categorys.index')->with('success', 'Categoria eliminada con éxito!');
    }
}
