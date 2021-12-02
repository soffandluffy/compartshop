<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('detail')->get();
        return view('backend.order.index')
            ->with('orders', $orders);
    }

    public function delete($id) {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route('order.index');
    }

    public function inputResi($id, Request $request) {
        $order = Order::findOrFail($id);
        $order->update([
            'status_order' => 'Order Sent',
            'no_resi' => $request->no_resi
        ]);
        return redirect()->route('order.index');
    }

    public function confirmArrived($id) {
        $order = Order::findOrFail($id);
        $order->update([
            'status_order' => 'Order Arrived',
        ]);
        return redirect()->route('order.index');
    }

    public function userOrder() {
        $orders = Order::with('detail')->where('user_id', auth()->user()->id)->get();
        $carts = Cart::where('user_id', auth()->user()->id)->get();
        return view('frontend.orders')
            ->with('carts', $carts)
            ->with('orders', $orders);
    }
}