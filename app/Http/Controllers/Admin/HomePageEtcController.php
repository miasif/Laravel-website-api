<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePageEtc;

class HomePageEtcController extends Controller
{
    public function selectVideo()
    {
        $video = HomePageEtc::select('video_description','video_url')->get();
        return response()->json($video);
    }
    public function selectTotal()
    {
        $total = HomePageEtc::select('total_student','total_course','total_review')->get();
        return response()->json($total);
    }
    public function onASelectTech()
    {
        $tech = HomePageEtc::select('tech_description')->get();
        return response()->json($tech);
    }
    public function onSelectTitle()
    {
        $title = HomePageEtc::select('home_title','home_subtitle')->get();
        return response()->json($title);
    }
   
}
