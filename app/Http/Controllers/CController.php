<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CController extends Controller
{
    function home() : View {
        return view('gst-home');
    }
}
