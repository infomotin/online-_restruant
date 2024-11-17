<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\CategoryDataTable;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Admin\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategoryDataTable $dataTable)
    {
        // dd($dataTable);
        return $dataTable->render('admin.product.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('create');
       return view('admin.product.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request):RedirectResponse
    {
        // dd($request->all());
        $category = new Category();
        $category->name = $request->name; 
        $category->slug = str()->slug($request->name);  
        $category->status = $request->status;
        $category->show_at_home = $request->show_at_home;
        $category->save();
        toastr()->success('Created Successfully');
        return to_route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Category::find($id);
        return view('admin.product.category.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $category = Category::find($id);
        $category->name = $request->name; 
        $category->slug = str()->slug($request->name);  
        $category->status = $request->status;
        $category->show_at_home = $request->show_at_home;
        $category->save();
        toastr()->success('Updated Successfully');
        return to_route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $category = Category::findOrFail($id);  
            $category->delete();
            toastr()->success('Deleted Successfully');
            return to_route('admin.category.index');
        }catch(\Exception $e){
            toastr()->error('Something went wrong');
            return $e->getMessage();
        }
    }
}
