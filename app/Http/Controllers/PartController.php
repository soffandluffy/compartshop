<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;

class PartController extends Controller
{
    public function index(){
        return view('backend.part.index');
    }

    public function create()
    {
        return view('backend.part.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        'name'=>'required',
        'price'=>'required',
        'weight'=>'required',
        'stock'=>'required',
        'description'=>'required',
        'images'=>'required',
        'category'=>'required',
        'brand'=>'required',
        ]);

        Part::create([
        'name'=>$request->name,
        'price'=>$request->price,
        'weight'=>$request->weight,
        'stock'=>$request->stock,
        'description'=>$request->description,
        'images'=>$request->image,
        'category'=>$request->category,
        'brand'=>$request->brand,
        ]);

        return redirect()->route('products')->with('success', 'Part berhasil disimpan');
    }

    public function edit($id) {
        $parts = Part::findOrFail($id);

        return view('backend.part.edit', [
            'parts' => $parts,
        ]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'weight'=>'required',
            'stock'=>'required',
            'description'=>'required',
            'images'=>'required',
            'category'=>'required',
            'brand'=>'required',
        ]);

        $parts = Part::findOrFail($id);

        $parts->update([
        'name'=>$request->name,
        'price'=>$request->price,
        'weight'=>$request->weight,
        'stock'=>$request->stock,
        'description'=>$request->description,
        'images'=>$request->image,
        'category'=>$request->category,
        'brand'=>$request->brand,
        ]);

        return redirect()->route('parts')->with('success', 'Part berhasil diubah');
    }

    public function delete($id){
        return redirect()->route('parts')->with('success', 'Part berhasil dihapus');
    }
}
