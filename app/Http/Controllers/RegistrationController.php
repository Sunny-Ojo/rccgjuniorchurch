<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //qa
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function check(Request $request)
    {
        $this->validate($request, [
            'pin' => 'required',
        ]);
        $pin = $request->input('pin');
        $checkPin = DB::select('select pins AND used_pins from pins where pins = ? AND used_pins = ?', [$pin, 'yes']);
        $checkOnlyPin = DB::select('select * from pins where pins = ?', [$pin]);
        if ($checkPin == true) {
            return redirect('/')->with('error', 'Sorry, this pin has  already been used, however if you would like to update your details you can contact your area co-ordinator... Thanks.');
        } elseif ($checkOnlyPin == true) {
            $request->session()->put('access', 'true');
            foreach ($checkOnlyPin as $checkers) {
                $pin_id = $checkers->id;
                DB::update('update pins set used_pins = ? where id = ?', ['yes', $pin_id]);
                return redirect('/campout/register');
            }

        } else {
            return redirect('/')->with('error', 'invalid pin');
        }

    }
}
