<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Gallery;

class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function spac()
    {
        return view('spac');
    }

    public function production()
    {
        return view('production');
    }

    public function gallery()
    {
        $galleries=Gallery::where('publish','1')->orderBy('position')->get();
        return view('gallery',compact('galleries'));
    }
}
