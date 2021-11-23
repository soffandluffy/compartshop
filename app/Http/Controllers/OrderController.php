<?php

namespace App\Http\Controllers;

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
}