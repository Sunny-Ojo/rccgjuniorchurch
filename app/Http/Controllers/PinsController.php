<?php

namespace App\Http\Controllers;

use App\campers;
use App\Teachers;
use DB;

class PinsController extends Controller
{
    public function getPinsFromEachAdmin()
    {
        $teachers = Teachers::orderBy('created_at', 'desc')->paginate(10);
        $campers = campers::orderBy('created_at', 'desc')->paginate(10);
        $adminName = auth()->user()->name;
        $adminst = DB::select('select * from users ');
        $adminUsers = DB::select('select admin from pins ');
        $getPins = DB::select('select * from pins ');
        return view('admin.pinsFromAdmin')->with(['campers' => $campers, 'teachers' => $teachers, 'adminPins' => $getPins, 'adminUsers' => $adminUsers]);
    }
}
