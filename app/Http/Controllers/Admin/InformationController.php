<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{
    public function onAllSelect()
    {
        $information = Information::all();
        return response()->json($information);
    }
    
}
