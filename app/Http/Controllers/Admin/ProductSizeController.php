<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\ProductSize;

class ProductSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showProduct($id){
        $size_data = ProductSize::where('product_id', $id)->get();
        $data = Product::where('id', $id)->first();
        return view('admin.product.productSize.index',compact('data','size_data'));
    }
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
        // dd($request->all());
        $request->validate([
            'size' => 'required',
            'price' => 'required',
        ]);
        ProductSize::create([
            'size' => $request->size,
            'price' => $request->price,
            'product_id' => $request->product_id,
        ]);
        toastr()->success('Created Successfully');

        return to_route('admin.product-size.adding', $request->product_id);
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
        try{
            $productSize = ProductSize::findOrFail($id);
            $productSize->delete();
            toastr()->success('deleted Successfully');
            return response()->json(['success' => 'Deleted Successfully','message' => 'Deleted Successfully']);
        }catch(\Exception $e){
            dd($e);
        }
    }
}
