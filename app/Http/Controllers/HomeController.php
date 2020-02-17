<?php

namespace App\Http\Controllers;

use App\campers;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $campers = campers::orderBy('created_at', 'asc')->paginate(10);
        return view('home')->with('users', $campers);
    }
}