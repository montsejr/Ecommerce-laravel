<?php

namespace App\Http\Controllers;

class CheckoutController extends Controller
{
    public function index()
    {
        session()->forget('cart');
        return "Compra realizada con éxito ✅";
    }
}
