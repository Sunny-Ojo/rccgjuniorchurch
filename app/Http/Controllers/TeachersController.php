<?php

namespace App\Http\Controllers;

use App\teachers;
use DB;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $teachersCount = teachers::all();
        $teachers = teachers::orderBy('created_at', 'desc')->paginate(10);
        return view('teachers.index')->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (session()->has('pin_id')) {
            $pin_id = session()->get('pin_id');

        }
        $this->validate($request,
            ['Title' => 'required',
                'Position' => 'required',
                'surname' => 'required',
                'firstName' => 'required',
                'gender' => 'required',
                'Department' => 'required',
                'passport' => 'required',
            ]);
        if ($request->hasFile('passport')) {

            $imgfullname = $request->file('passport')->getClientOriginalName();
            $imgExt = $request->file('passport')->getClientOriginalExtension();
            $imgname = pathinfo($imgfullname, PATHINFO_FILENAME);
            $imgtoDb = $imgname . '_' . time() . '.' . $imgExt;
            $path = $request->file('passport')->storeAs('public/passports/', $imgtoDb);
        }
        $teachers = new teachers();
        $teachers->title = $request->Title;
        $teachers->position = $request->Position;
        $teachers->surname = $request->surname;
        $teachers->firstName = $request->firstName;
        $teachers->gender = $request->gender;
        $teachers->department = $request->Department;
        $teachers->passport = $imgtoDb;
        DB::update('update pins set used_pins = ? where id = ?', ['yes', $pin_id]);
        $request->session()->flush();
        $teachers->save();
        return redirect('/')->with("success", "Thank you for registering for the Easter campout 2020...
        Please kindly know that if there's any need for you to update your details, you'll need to contact your area coordinator. Have a lovely campout!!!
        You can now exit");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = teachers::find($id);
        return view('teachers.show')->with('users', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = teachers::find($id);
        return view('teachers.edit')->with('users', $user);
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
        $this->validate($request,
            ['Title' => 'required',
                'Position' => 'required',
                'surname' => 'required',
                'firstName' => 'required',
                'gender' => 'required',
                'Department' => 'required',
            ]);
        if ($request->hasFile('passport')) {

            $imgfullname = $request->file('passport')->getClientOriginalName();
            $imgExt = $request->file('passport')->getClientOriginalExtension();
            $imgname = pathinfo($imgfullname, PATHINFO_FILENAME);
            $imgtoDb = $imgname . '_' . time() . '.' . $imgExt;
            $path = $request->file('passport')->storeAs('public/passports/', $imgtoDb);
        }
        $teachers = teachers::find($id);
        $teachers->title = $request->Title;
        $teachers->position = $request->Position;
        $teachers->surname = $request->surname;
        $teachers->firstName = $request->firstName;
        $teachers->gender = $request->gender;
        $teachers->department = $request->Department;

        if ($request->hasFile('passport')) {

            $imgfullname = $request->file('passport')->getClientOriginalName();
            $imgExt = $request->file('passport')->getClientOriginalExtension();
            $imgname = pathinfo($imgfullname, PATHINFO_FILENAME);
            $imgtoDb = $imgname . '_' . time() . '.' . $imgExt;
            $path = $request->file('passport')->storeAs('public/passports/', $imgtoDb);
        }
        $teachers->passport = $imgtoDb;
        $teachers->save();

        return redirect('/admin')->with('success', 'Profile was updated successfully');
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
}