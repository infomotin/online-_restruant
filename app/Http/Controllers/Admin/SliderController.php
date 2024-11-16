<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SliderDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\View\View;
use App\Http\Requests\Admin\SliderCreateRequest;
use App\Http\Requests\Admin\SliderUpdate;
use App\Trait\FileUploadTrait;
use App\Models\Admin\Slider;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use FileUploadTrait;
    public function index(SliderDataTable $dataTable)
    {
        return $dataTable->render('admin.slider.index');
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderCreateRequest $request)
    {
         //     $table->text('image');
        //     $table->string('offer');
        //     $table->string('title');
        //     $table->string('sub_title');
        //     $table->string('short_description')->nullable();
        //     $table->string('long_description')->nullable();
        //     $table->string('button_link')->nullable();
        //     $table->string('button_text')->nullable();
        //     $table->string('aria_label')->nullable();
        //     $table->string('alt_text')->nullable();
        //     $table->dateTime('start_date')->nullable();
        //     $table->dateTime('end_date')->nullable();
        //     $table->boolean('status')->default(0);
        // dd($request->all());
        $imagePath = $this->uploadImage($request, 'image');
        $slider = new Slider();
        $slider->image = $imagePath;
        $slider->offer = $request->offer;
        $slider->title = $request->title;
        $slider->sub_title = $request->sub_title;
        $slider->short_description = $request->short_description;
        $slider->long_description = $request->long_description;
        $slider->button_link = $request->button_link;
        $slider->button_text = $request->button_text;
        $slider->aria_label = $request->aria_label;
        $slider->alt_text = $request->alt_text;
        $slider->start_date = $request->start_date;
        $slider->end_date = $request->end_date;
        $slider->status = 0;
        $slider->save();

        toastr()->success('Created Successfully');
        return to_route('admin.slider.index');
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
    public function edit(string $id): View
    {
        return view('admin.slider.edit', [
            'slider' => Slider::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SliderUpdate $request, string $id)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return response()->json(['message' => 'Deleted Successfully']);
    }
}
