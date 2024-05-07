<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(12);
        return view('welcome', ['products' => $products]);
    }

    public function addProduct()
    {
        return view('product-form');
    }

    public function store(ProductRequest $request): RedirectResponse
    {
        try {
            $validatedData = $request->validated();
            if ($request->hasFile('image')) {
                $imagePath = uploadProductImage($request->file('image'), 'products');
                $validatedData['image'] = $imagePath;
            }

            $product = new Product();
            $product->fill($validatedData);
            $product->save();

        }catch (Exception $exception) {
            Toastr::error('Something is wrong!!!', 'Failed');
        }
        Toastr::success('Product added successfully!!!', 'Done');
        return redirect()->route('add.product');
    }
}
