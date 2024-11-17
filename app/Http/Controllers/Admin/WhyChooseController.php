<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\WhyChooseUsDataTable;
use App\Models\Admin\WhyChooseUs;
use App\Http\Requests\Admin\WhyChooseUsCreateRequest;
use App\Http\Requests\Admin\WhyChooseUsUpdate;
use App\Models\Admin\SectionTitle;
use Illuminate\View\View;




class WhyChooseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(WhyChooseUsDataTable $dataTable)
    {
        $key = ['why_choose_top_title', 'why_choose_main_title', 'why_choose_sub_title'];
        $title = SectionTitle::whereIn('key', $key)->orderBy('key', 'desc')->pluck('value', 'key')->toArray();
        // dd($title);
        return $dataTable->render('admin.whychooseus.index',compact('title'));
    }
    //titleUpdate
    public function titleUpdate(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'why_choose_top_title' => 'required:max:255',
            'why_choose_main_title' => 'required:max:255',
            'why_choose_sub_title' => 'required:max:255',
        ]);

        SectionTitle::updateOrCreate(
            ['key' => 'why_choose_top_title'],
            ['value' => $request->why_choose_top_title]
        );
        SectionTitle::updateOrCreate(
            ['key' => 'why_choose_main_title'],
            ['value' => $request->why_choose_main_title]
        );
        SectionTitle::updateOrCreate(
            ['key' => 'why_choose_sub_title'],
            ['value' => $request->why_choose_sub_title]
        );
        return redirect()->back()->with('success', 'Title Updated Successfully');
    }
    /** 
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.whychooseus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WhyChooseUsCreateRequest $request)
    {
        // dd($request->all());
        WhyChooseUs::create([
            'icon' => $request->icon,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'status' => 1,
        ]);
        return to_route('admin.why-choose-us.index')->with('success', 'Created Successfully');
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
        $data = WhyChooseUs::findOrFail($id);
        return view('admin.whychooseus.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WhyChooseUsUpdate $request, string $id)
    {
        $whyChooseUs = WhyChooseUs::findOrFail($id);
        $whyChooseUs->icon = $request->icon;
        $whyChooseUs->title = $request->title;
        $whyChooseUs->short_description = $request->short_description;
        $whyChooseUs->status = $request->status;
        $whyChooseUs->save();
        return to_route('admin.why-choose-us.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $whyChooseUs = WhyChooseUs::findOrFail($id);
            $whyChooseUs->delete();
            return response()->json(['success' => 'Deleted Successfully']);
        }catch(\Exception $e){
            return response()->json(['error' => 'Something went wrong']);
        }
       
    }
}
