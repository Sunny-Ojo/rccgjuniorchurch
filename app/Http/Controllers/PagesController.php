<?php

namespace App\Http\Controllers;

use App\campers;
use App\pin;
use App\Teachers;
use App\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function adminlogin()
    {
        return view('adminlogin');
    }
    public function adminregister()
    {
        return view('adminregister');
    }
    public function registeradmin(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);
        if ($request->password != $request->password_confirmation) {
            return redirect('/adminregister')->with('error', 'passwords do not match');
        } else {
            $password = Hash::make($request->password);

        }
        $checkphone = DB::select('select * from users where phone = ?', [$request->phone]);
        if ($checkphone == true) {
            return redirect('/adminregister')->with('error', 'phone number has already been registered');

        } else {
            $admin = new User();
            $admin->name = $request->name;
            $admin->phone = $request->phone;
            $admin->password = $password;
            $admin->save();
            return redirect('/admin')->with('success', 'This user has been registerd as an admin for this event');

        }

    }
    public function loginverification(Request $request)
    {

        $this->validate($request, [
            'phone' => 'required',
            'password' => 'required',

        ]);
        if (Auth::attempt(['phone' => $request->phone, 'password' => $request->password])) {
            return redirect('/admin');
        } else {
            return redirect('/adminlogin')->with('error', "These credentials does not match our records");
        }
    }
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
        ini_set('upload_max_size', '24M');
        // collecting the details from the user and validating it
        if (session()->has('pin_id')) {
            $pin_id = session()->get('pin_id');

        }
        $this->validate($request, [
            'surname' => 'required',
            'firstName' => 'required',
            'parentsName' => 'required',
            'parentsPhone' => 'required',
            'area' => 'required',
            'zone' => 'required',
            'gender' => 'required',
            'parish' => 'required',
            'dob' => 'required',
            'passport' => 'image|required',
            'allergies' => 'required',

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
        $surname = $request->surname;
        $details->firstName = $request->firstName;
        $firstName = $request->firstName;
        $details->nameOfParents = $request->parentsName;
        $details->parentContact = $request->parentsPhone;
        $details->area = $request->area;
        $details->zone = $request->zone;
        $details->parish = $request->parish;
        $details->gender = $request->gender;
        $details->dob = $request->dob;
        $details->passport = $imgtoDb;
        $details->allergies = $request->allergies;
        DB::update('update pins set used_pins = ? where id = ?', ['yes', $pin_id]);
        DB::update('update pins set surname = ?, firstName = ? where id = ?', [$surname, $firstName . ' (Camper)', $pin_id]);
        $details->save();

        $request->session()->flush();
        return redirect('/')->with("success", "Thank you for registering for the Easter campout 2020...
        Please kindly know that if there's any need for you to update your details, you'll need to contact your area coordinator. Have a lovely campout!!!
        You can now exit");
    }

    public function edit()
    {
        return view('/edit');
    }
    public function pin()
    {
        $teachers = Teachers::orderBy('created_at', 'asc')->paginate(10);
        $campers = campers::orderBy('created_at', 'asc')->paginate(10);
        $getPins = DB::select('select * from pins ');

        return view('pages.pin')->with(['campers' => $campers, 'teachers' => $teachers, 'adminPins' => $getPins]);
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
                $pins->admin = auth()->user()->name;
                $pins->save();
            }
            return redirect('/admin')->with('success', 'successfully generated and sent ');

        }

    }

    public function check(Request $request)
    {
        // validating the pin form from the welcome page

        $this->validate($request, [
            'pin' => 'required',

        ]);

        $pin = $request->input('pin');

        // checking the database to check if pin has already been used or if it exists in the database

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
    public function viewPins()
    {
        // displaying the pins generated by the admin
        $teachers = Teachers::orderBy('created_at', 'asc')->paginate(10);
        $campers = campers::orderBy('created_at', 'asc')->paginate(10);
        $getPins = DB::select('select * from pins ');
        $generatedPins = pin::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.generatedpins')->with(['campers' => $campers, 'teachers' => $teachers, 'pins' => $generatedPins, 'adminPins' => $getPins]);

    }
    public function destroy($id)
    {

        $user = campers::find($id);
        Storage::delete(['public/passports/' . $user->passport]);
        $user->delete();
        return redirect('/admin')->with('success', 'User has been deleted successfully');
    }
    public function teachers()
    {
        return view('teachers.teachersPin');
    }
    public function confirmPin(Request $request)
    {
        $this->validate($request, [
            'pin' => 'required',
        ]);
        $pin = $request->input('pin');

        // checking the database to check if pin has already been used or if it exists in the database

        $checkPin = DB::select('select pins AND used_pins from pins where pins = ? AND used_pins = ?', [$pin, 'yes']);
        $checkOnlyPin = DB::select('select * from pins where pins = ?', [$pin]);
        if ($checkPin == true) {
            return redirect('/register/teacher')->with('error', 'Sorry, this pin has  already been used, however if you would like to update your details you can contact your area co-ordinator... Thanks.');
        } elseif ($checkOnlyPin == true) {
            foreach ($checkOnlyPin as $checkers) {
                $pin_id = $checkers->id;
                $request->session()->put('access', 'true');
                $request->session()->put('pin_id', $pin_id);

                //
                //         DB::update('update pins set used_pins = ? where id = ?', ['yes', $pin_id]);
                return redirect('/teachers/create');
            }

        } else {
            return redirect('/register/teacher')->with('error', 'invalid pin');
        }
    }
}