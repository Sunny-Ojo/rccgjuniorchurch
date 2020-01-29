<?php

namespace App\Http\Controllers;

use App\campers;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $this->validate($request,
            ['q' => 'required',
            ]);
        $user = $request->input('q');
        $getUser = campers::where('surname', 'LIKE', '%' . $user . '%')->orWhere('firstName', 'LIKE', '%' . $user . '%')->get();
        if (count($getUser) > 0) {
            return view('admin.search')->withDetails($getUser)->withQuery($user);

        } else {
            return redirect('/admin')->with('error', 'no user found, make sure the name is correct');

        }
    }
}