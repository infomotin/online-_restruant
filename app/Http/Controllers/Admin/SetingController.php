<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SetingController extends Controller
{
    //index
    public function index(): View
    {
        return view('admin.seting.index');
    }
    //updateGenalSetting
    public function updateGenalSetting(Request $request)
    {
        
        $validate = $request->validate([
            'app_name' => 'required|max:255',
            'app_default_currency' => 'required|max:255',
            'app_icon' => 'required',
            'currency_position' => 'required',
            'app_default_language' => 'required',
            'app_default_colour' => 'required',
        ]);
        foreach ($validate as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key], 
                ['value' => $value]
            );
        }
        toastr()->success('Updated Successfully');
        return redirect()->back();
    }
}
