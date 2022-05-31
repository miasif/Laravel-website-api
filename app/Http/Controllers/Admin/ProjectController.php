<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectController extends Controller
{
    public function onSelectThree()
    {
        $projects = Projects::limit(3)->get();
        return response()->json($projects);
    }
    public function onAllSelect()
    {
        $projects = Projects::all();
        return response()->json($projects);
    }
    public function onSelectDetails(Request $request)
    {
        $id = $request->id;
        $projects = Projects::where('id', $id)->get();
        return response()->json($projects);
    }
}
