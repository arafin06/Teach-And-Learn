<?php

namespace App\Http\Controllers;
use App\Clint;
use Illuminate\Http\Request;

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
        $clints = Clint::where('verify', 1)->get();

        return view('admin.home.home',[
            'clints'=>$clints
        ]);
    }
}
