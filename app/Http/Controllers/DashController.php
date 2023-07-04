<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashController extends Controller
{
    function index(Request $request) : View {
        return view('adm-index', [
            'user' => $request->user(),
        ]);
    }
    function general() : View {
        return view('adm-general');
    }
    function hospital() : View {
        return view('adm-hospital');
    }
    function music() : View {
        return view('adm-music');
    }
    function crm() : View {
        return view('adm-crm');
    }
    function socialmedia() : View {
        return view('adm-socialmedia');
    }
    function freelancing() : View {
        return view('adm-freelancing');
    }
    function university() : View {
        return view('adm-university');
    }
    function ecommerce() : View {
        return view('adm-ecommerce');
    }
    function blog() : View {
        return view('adm-blog');
    }
}
