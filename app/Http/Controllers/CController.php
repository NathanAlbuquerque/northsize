<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CController extends Controller
{
    function home() : View {
        $banners = Banner::orderBy('id', 'asc')->get();
        return view('gst-home', compact('banners'));
    }
}
