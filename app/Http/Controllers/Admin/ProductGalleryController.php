<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ProductGallery;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use App\Trait\FileUploadTrait;


class ProductGalleryController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    //showProduct
    public function showProduct(string $id)
    {
        // dd($id);
        $data = Product::where('id', $id)->first();
        $images = ProductGallery::where('product_id', $id)->get();
        // dd($images);
        return view('admin.product.productGallery.index',compact('data','images'));
    }
     public function index()
    {
        dd('index');
        // $data = ProductGallery::all();
        return view('admin.product.productGallery.index');
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
        $request->validate([
            'image' => 'required|image|max:2048',
        ]);
        $imagePath = $this->uploadImage($request, 'image');
        // dd($imagePath);
        ProductGallery::create([
            'image' => $imagePath,
            'product_id' => $request->product_id,
            'alt_text' =>'No Alt Text',

        ]);

        toastr()->success('Created Successfully');
        return to_route('admin.product-photog-allery.index', $request->product_id);
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
            $data = ProductGallery::where('id', $id)->first();
            // dd($data);
            $this->removeImage($data->image);
            ProductGallery::where('id', $id)->delete();
            toastr()->success('Deleted Successfully');
            return response()->json(['status' => 'success','message' => 'Deleted Successfully']);
        }catch(\Exception $e){
            dd($e);
        }
    }
}
