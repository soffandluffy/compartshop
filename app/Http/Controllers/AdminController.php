<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $parts = Part::where('stock', '<=', 10)->get();
        return view ('backend.dashboard')
            ->with('parts', $parts);
    }
}