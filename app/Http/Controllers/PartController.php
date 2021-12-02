<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Part;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PartController extends Controller
{
    public function index()
    {
        $parts = Part::all();
        return view('backend.part.index')
            ->with('parts', $parts);
    }

    public function detail($id)
    {
        $part = Part::findOrFail($id);
        $carts = Cart::where('user_id', auth()->user()->id)->get();
        return view('frontend.partdetail')
            ->with('carts', $carts)
            ->with('part', $part);
    }

    public function create()
    {
        return view('backend.part.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'stock' => 'required',
            'description' => 'required',
            'images' => 'required',
            'category' => 'required',
            'brand' => 'required',
        ]);

        $files = [];
        foreach ($request->file('images') as $image) {
            $imageName = time() . rand(1, 100) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/parts'), $imageName);
            $files[] = $imageName;
        }

        Part::create([
            'name' => $request->name,
            'price' => $request->price,
            'weight' => $request->weight,
            'stock' => $request->stock,
            'description' => $request->description,
            'images' => $files,
            'category' => $request->category,
            'brand' => $request->brand,
        ]);

        return redirect()->route('part.index')->with('success', 'Part berhasil disimpan');
    }

    public function edit($id)
    {
        $part = Part::findOrFail($id);

        return view('backend.part.edit', [
            'part' => $part,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'weight' => 'required',
            'stock' => 'required',
            'description' => 'required',
            'images' => 'required',
            'category' => 'required',
            'brand' => 'required',
        ]);

        $parts = Part::findOrFail($id);

        $files = [];
        if ($request->hasFile('images')) {

            foreach ($parts->images as $key => $value) {
                $imagePath = 'images/parts/' . $value;
                if ($value != 'code1.png') {
                    if (File::exists($imagePath)) {
                        File::delete($imagePath);
                    }
                }
            }

            foreach ($request->file('images') as $image) {
                $imageName = time() . rand(1, 100) . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/parts'), $imageName);
                $files[] = $imageName;
            }
        } else {
            $files = $parts->images;
        }

        $parts->update([
            'name' => $request->name,
            'price' => $request->price,
            'weight' => $request->weight,
            'stock' => $request->stock,
            'description' => $request->description,
            'images' => $files,
            'category' => $request->category,
            'brand' => $request->brand,
        ]);

        return redirect()->route('part.index')->with('success', 'Part berhasil diubah');
    }

    public function delete($id)
    {
        $part = Part::findOrFail($id);
        foreach ($part->images as $value) {
            $imagePath = 'images/parts/' . $value;
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
        $part->delete();
        return redirect()->route('part.index')->with('success', 'Part berhasil dihapus');
    }
}