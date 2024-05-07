<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        try {

            $products = $request->products;
            $total = $request->total;
            foreach ($products as $key => $product) {
                Order::create([
                    'product_id' => $key,
                    'quantity' => $product['quantity'],
                    'total' => $total
                ]);
            }
        }catch (\Exception $exception) {
            dd($exception);
        }
        return redirect()->back();
    }
}
