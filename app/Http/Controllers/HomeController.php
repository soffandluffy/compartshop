<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $parts = Part::paginate(8);
        if (Auth::check()) {
            $carts = Cart::where('user_id', auth()->user()->id)->get();
            return view('frontend.home')
                ->with('carts', $carts)
                ->with('parts', $parts);
        } else {
            return view('frontend.home')
                ->with('parts', $parts);
        }
    }
}