<?php

namespace App\Http\Controllers;

use App\campers;
use App\Teachers;

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
        $teachers = Teachers::orderBy('created_at', 'asc')->paginate(10);
        $campers = campers::orderBy('created_at', 'asc')->paginate(10);
        return view('index')->with(['campers' => $campers, 'teachers' => $teachers]);
    }
}
