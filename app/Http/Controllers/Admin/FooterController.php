<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function onAllSelect()
    {
        $footer = Footer::all();
        return response()->json($footer);
    }
}
