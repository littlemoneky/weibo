<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use Auth;

class StaticPagesController extends Controller
{
    public function home()
    {
        $feed_times = [];
        if(Auth::check()){
            $feed_times = Auth::user()->feed()->paginate(30);
        }
        return view('static_pages/home',compact('feed_times'));
    }

    public function help()
    {
        return view('static_pages/help');
    }

    public function about()
    {
        return view('static_pages/about');
    }
}
