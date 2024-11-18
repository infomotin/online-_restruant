<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\ProductOption;

class ProductOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)

    {
        $data = Product::where('id', $id)->first();
        $option_data = ProductOption::where('product_id', $id)->get();
        return view('admin.product.productOption.index',compact('data', 'option_data'));
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
        // dd($request->all());
        $request->validate([
            'bundle_name' => 'required',
            'price' => 'required',
        ],
        [
            'bundle_name.required' => 'Please enter bundle name',
            'price.required' => 'Please enter price',
        ]);
        ProductOption::create([
            'bundle_name' => $request->bundle_name,
            'price' => $request->price,
            'product_id' => $request->product_id,
        ]);
        toastr()->success('Created Successfully');
        return to_route('admin.product-option.adding', $request->product_id);
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
