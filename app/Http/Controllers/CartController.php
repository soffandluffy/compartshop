<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'part_id' => 'required',
            'qty' => 'required',
        ]);

        $carts = Cart::where('user_id', auth()->user()->id)
            ->where('part_id', $request->part_id)
            ->first();

        if ($carts) {
            Cart::where('user_id', auth()->user()->id)
                ->where('part_id', $request->part_id)
                ->update([
                    'qty' => $carts->qty + $request->qty
                ]);
        } else {
            Cart::create([
                'user_id' => auth()->user()->id,
                'part_id' => $request->part_id,
                'qty' => $request->qty,
            ]);
        }

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang');
    }

    public function removeFromCart(Request $request)
    {
        $request->validate([
            'part_id' => 'required',
        ]);

        $carts = Cart::where('user_id', auth()->user()->id)
            ->where('part_id', $request->part_id)
            ->first();

        if ($carts) {
            Cart::where('user_id', auth()->user()->id)
                ->where('part_id', $request->part_id)
                ->delete();
        }

        return redirect()->back()->with('success', 'Produk berhasil dihapus ke keranjang');
    }
}
