<?php

namespace App\Http\Controllers;

use App\campers;
use App\Teachers;
use DB;
use Illuminate\Http\Request;

class CampersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $teachers = Teachers::orderBy('created_at', 'asc')->paginate(10);
        $campers = campers::orderBy('created_at', 'asc')->paginate(10);
        $getPins = DB::select('select * from pins ');

        return view('campers.index')->with(['campers' => $campers, 'teachers' => $teachers, 'adminPins' => $getPins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/campout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = campers::find($id);
        return view('campers.show')->with(['campers' => $user, 'layouts' => 'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = campers::find($id);
        return view('campers.edit')->with(['campers' => $user, 'layouts' => 'edit']);
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

        $this->validate($request, [
            'surname' => 'required',
            'firstName' => 'required',
            'parentsName' => 'required',
            'parentsPhone' => 'required|min:11',
            'area' => 'required',
            'zone' => 'required',
            'parish' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'allergies' => 'nullable',

        ]);
        if ($request->hasFile('passport')) {
            $imgfullname = $request->file('passport')->getClientOriginalName();
            $imgExt = $request->file('passport')->getClientOriginalExtension();
            $imgname = pathinfo($imgfullname, PATHINFO_FILENAME);
            $imgtoDb = $imgname . '_' . time() . '.' . $imgExt;
            $path = $request->file('passport')->storeAs('public/passports/', $imgtoDb);
        }

        $details = campers::find($id);
        $details->surname = $request->surname;
        $details->firstName = $request->firstName;
        $details->nameOfParents = $request->parentsName;
        $details->parentContact = $request->parentsPhone;
        $details->area = $request->area;
        $details->zone = $request->zone;
        $details->parish = $request->parish;
        $details->gender = $request->gender;
        $details->dob = $request->dob;
        if ($request->hasFile('passport')) {
            $imgfullname = $request->file('passport')->getClientOriginalName();
            $imgExt = $request->file('passport')->getClientOriginalExtension();
            $imgname = pathinfo($imgfullname, PATHINFO_FILENAME);
            $imgtoDb = $imgname . '_' . time() . '.' . $imgExt;
            $path = $request->file('passport')->storeAs('public/passports/', $imgtoDb);
            $details->passport = $imgtoDb;
        }
        $details->allergies = $request->allergies;
        $details->save();

        return redirect()->route('campers.show', $id)->with('success', 'Update was successful');

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