<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;

class CoursesController extends Controller
{
    public function onSelectFour()
    {
        $courses = Courses::limit(4)->get();
        return response()->json($courses);
    }
    public function onAllSelect()
    {
        $courses = Courses::all();
        return response()->json($courses);
    }
    public function onSelectDetails(Request $request)
    {
        $id = $request->id;
        $courses = Courses::where('id', $id)->get();
        return response()->json($courses);
    }
}
