<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Admin\Slider;
use App\Models\Admin\SectionTitle;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\WhyChooseUs;
use App\Models\Admin\Category;

class FrontendController extends Controller
{
    public function index(): View
    {
        $slider = Slider::where('status', 1)->get();
        $sectionTitle = $this->getSectionTitle();
        $whyChoose = WhyChooseUs::where('status', 1)->orderBy('id', 'desc')->limit(3)->get();
        $categorys = Category::where('status', 1)->get();
        return view('frontend.home.index', compact('slider', 'sectionTitle','whyChoose','categorys'));
    }
    //getSectionTitle function to get section title from database
    public function getSectionTitle(){
        $key = ['why_choose_top_title', 'why_choose_main_title', 'why_choose_sub_title'];
        $sectionTitle =  SectionTitle::whereIn('key', $key)->orderBy('key', 'desc')->pluck('value', 'key');
        // $sectionTitle = DB::table('section_titles')->whereIn('key', $key)->orderBy('key', 'desc')->pluck('value', 'key');
        return $sectionTitle;
    }
}
