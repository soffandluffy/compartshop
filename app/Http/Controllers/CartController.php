<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Part;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->validate([
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

        $newcarts = Cart::with(['part', 'user'])->get();
        return response()->json([
            'success' => 'Produk berhasil ditambahkan ke keranjang',
            'newcarts' => $newcarts
        ]);
        // return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang')
        //     ->with('newcarts', $newcarts);
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

        $newcarts = Cart::with(['part', 'user'])->get();
        return response()->json([
            'success' => 'Produk berhasil dihapus ke keranjang',
            'newcarts' => $newcarts
        ]);
    }

    public function checkout()
    {
        $carts = Cart::where('user_id', auth()->user()->id)->get();
        $totalprice = Cart::getTotalPrice();
        return view('frontend.checkout')
            ->with('totalprice', $totalprice)
            ->with('carts', $carts);
    }

    public function submitOrder(Request $request)
    {
        $request->validate([
            'subtotal' => 'required',
            'payment_method' => 'required',
            'courier' => 'required',
            'address' => 'required',
            'phonenumber' => 'required'
        ]);

        $order = Order::create([
            'user_id' => auth()->user()->id,
            'subtotal' => $request->subtotal,
            'status_order' => "Order Confirmed",
            'payment_method' => $request->payment_method,
            'shipping_price' => "30000",
            'courier' => $request->courier,
            'address' => $request->address,
            'phonenumber' => $request->phonenumber,
            'message' => $request->message,
        ]);

        $carts = Cart::with('part')->where('user_id', auth()->user()->id)->get();
        foreach ($carts as $cart) {
            OrderDetail::create([
                'order_id' => $order->id,
                'part_id' => $cart->part_id,
                'qty' => $cart->qty
            ]);
            Part::find($cart->part_id)->decrement('stock', $cart->qty);
        }
        Cart::where('user_id', auth()->user()->id)->delete();

        return redirect()->route('orderconfirmed', $order->id);
    }

    public function orderConfirmed($id)
    {
        $order = Order::findOrFail($id);
        $carts = Cart::where('user_id', auth()->user()->id)->get();
        return view('frontend.order_confirmed')
            ->with('carts', $carts)
            ->with('order', $order);
    }
}