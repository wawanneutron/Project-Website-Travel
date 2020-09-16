<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.checkout');
    }

    // succses checkout
    public function succses(Request $request)
    {
        return view('pages.succses');
    }
}
