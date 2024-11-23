<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Collection;
use Illuminate\View\View;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {  
        // Cart::destroy();
        // dd($request->all());
        try {
        // dd($request->all());
        $product = Product::with(['category', 'size', 'option', 'gallery'])->findOrFail($request->product_id);
        $product_size = $product->size->where('id', $request->product_size)->first();
        $product_options = $product->option->whereIn('id', $request->product_option);

        // dd($product_options);
        $options = [
            'product_size' => [],
            'product_option' => [],
            'product_info' => [
                'image' => $product->thumbnail_image,
                'slug' => $product->slug
            ]
        ];
        if ($product_size !== null) {
            $options['product_size'] = [
                'id' =>  $product_size?->id,
                'name' => $product_size?->size,
                'price' =>  $product_size?->price
            ];
        }
       
            foreach ($product_options as $option) {
                $options['product_option'][] = [
                    'id' =>  $option?->id,
                    'name' => $option?->bundle_name,
                    'price' =>  $option?->price,
                ];
            }
        
        
        // dd($options);
        // 'id' => '293ad', 'name' => 'Product 1', 'qty' => 1, 'price' => 9.99, 'weight' => 550, 'options' => ['size' => 'large']
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => $request->quentity,
            'price' => $product->offer_price > 0 ? $product->offer_price : $product->price,
            'weight' => 0,
            'options' => $options
        ]);
        return response(['status' => 'success', 'success' => 'Product Added To Cart'], 200);
    } catch (\Exception $e) {
        return response(['status' => 'error', 'error' => $e->getMessage()], 400);
    }
    }

    //getFormCart
    public function getFormCart()
    {
        
        $cart = Cart::content();
        return view('frontend.layouts.sidebar-cart-item', compact('cart'))->render();
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
