<?php

// app/Http/Controllers/OrderController.php
namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $carts = Cart::where('user_id', $request->user_id)->get();
        $total = $carts->sum(fn($cart) => $cart->product->price * $cart->quantity);

        $order = Order::create([
            'user_id' => $request->user_id,
            'total' => $total,
        ]);

        $carts->each->delete();

        return response()->json($order, 201);
    }
}
