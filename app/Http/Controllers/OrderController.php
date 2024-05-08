<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function placeOrder(Request $request): \Illuminate\Http\JsonResponse
    {
        try {
            $products = $request->products;
            $total = $request->total;
            foreach ($products as $key => $product) {
                $thisProduct = Product::whereId($key)->first();
                $discount = $thisProduct->discount_percentage ? ($thisProduct->discount_percentage/100) : 0;
                $tax = $thisProduct->tax_percentage ? ($thisProduct->tax_percentage/100) : 0;
                $price = (($thisProduct->selling_price - $discount) + $tax) * $product['quantity'];
                Order::create([
                    'product_id' => $key,
                    'quantity' => $product['quantity'],
                    'price' => $price,
                    'total' => $total
                ]);
            }
        }catch (\Exception $exception) {
            return response()->json(['success' => false, 'message' => 'Failed to place order'], 500);
        }
        return response()->json(['success' => true, 'message' => 'Order placed successfully']);
    }

    public function orderList()
    {
        $orders = Order::with('product')->orderBy('id', 'desc')->paginate(10);

        return view('order-list', ['orders' => $orders]);
    }
}
