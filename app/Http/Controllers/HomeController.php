<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Weedoparrot;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weedlist = Weedoparrot::all();
        //dd($weedlist->toArray());
        return view('home')->with('weedlist',$weedlist);
    }
}
