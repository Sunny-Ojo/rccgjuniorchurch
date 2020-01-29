<?php

namespace App\Http\Controllers;

use App\campers;
use App\pin;
use DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function campout()
    {
        if (session()->has('access')) {
            return view('pages.register');

        } else {
            return redirect('/')->with('error', 'Access Denied');
        }
    }
    public function confirm(Request $request)
    {
        if (session()->has('access')) {
            return view('pages.confirm');
        } else {
            return redirect('/')->with('error', 'Access Denied');
        }

    }

    public function store(Request $request)
    {
        if (session()->has('pin_id')) {
            $pin_id = session()->get('pin_id');

        }
        $this->validate($request, [
            'surname' => 'required',
            'firstName' => 'required',
            'parentsName' => 'required',
            'parentsPhone' => 'required|min:11',
            'area' => 'required',
            'zone' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'passport' => 'image|required',
            'allergies' => 'nullable',

        ]);
        if ($request->hasFile('passport')) {
            $imgfullname = $request->file('passport')->getClientOriginalName();
            $imgExt = $request->file('passport')->getClientOriginalExtension();
            $imgname = pathinfo($imgfullname, PATHINFO_FILENAME);
            $imgtoDb = $imgname . '_' . time() . '.' . $imgExt;
            $path = $request->file('passport')->storeAs('public/passports/', $imgtoDb);
        }

        $details = new campers();
        $details->surname = $request->surname;
        $details->firstName = $request->firstName;
        $details->nameOfParents = $request->parentsName;
        $details->parentContact = $request->parentsPhone;
        $details->area = $request->area;
        $details->zone = $request->zone;
        $details->gender = $request->gender;
        $details->dob = $request->dob;
        $details->passport = $imgtoDb;
        $details->allergies = $request->allergies;
        $details->save();
        DB::update('update pins set used_pins = ? where id = ?', ['yes', $pin_id]);
        $request->session()->flush();
        return redirect('/')->with('success', 'Thank you for registering for the Easter campout 2020...
        Please kindly know that if there"s any need for you to update your details, you"ll need to contact your area coordinator. Have a lovely campout!!!
        You can now leave the Website');
    }

    public function edit()
    {
        return view('/edit');
    }
    public function pin()
    {
        return view('pages.pin');
    }

    public function checked(Request $request)
    {

        $this->validate($request, [
            'pin' => 'required',
        ]);
        $pin = $request->input('pin');
        if ($pin > 0) {
            for ($i = 1; $i <= $pin; $i++) {
                $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $result = substr(str_shuffle(str_repeat($pool, 6)), 0, 6);
                $pins = new pin();
                $pins->pins = $result;
                $pins->save();
            }
            return redirect('/admin')->with('success', 'Pins has been generated and sent successfully');

        }

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
            foreach ($checkOnlyPin as $checkers) {
                $pin_id = $checkers->id;
                $request->session()->put('access', 'true');
                $request->session()->put('pin_id', $pin_id);

                //
                //         DB::update('update pins set used_pins = ? where id = ?', ['yes', $pin_id]);
                return redirect('/campout/register');
            }

        } else {
            return redirect('/')->with('error', 'invalid pin');
        }

    }

}