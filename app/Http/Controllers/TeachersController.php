<?php

namespace App\Http\Controllers;

use App\campers;
use App\Teachers;
use DB;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['create', 'store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teachers::orderBy('created_at', 'asc')->paginate(10);
        $campers = campers::orderBy('created_at', 'asc')->paginate(10);
        $getPins = DB::select('select * from pins ');

        return view('teachers.index')->with(['campers' => $campers, 'teachers' => $teachers, 'adminPins' => $getPins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (session()->has('pin_id')) {
            return view('teachers.register');
        }
        {
            return redirect('/register/teacher');
        }
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
        $surname = $request->surname;
        $teachers->firstName = $request->firstName;
        $firstName = $request->firstName;
        $teachers->gender = $request->gender;
        $teachers->department = $request->Department;
        $teachers->passport = $imgtoDb;

        DB::update('update pins set used_pins = ? where id = ?', ['yes', $pin_id]);
        DB::update('update pins set surname = ?, firstName = ? where id = ?', [$surname, $firstName . ' (Teacher)', $pin_id]);
        $teachers->save();
        $request->session()->flush();
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
        $teachers = Teachers::orderBy('created_at', 'asc')->paginate(10);
        $campers = campers::orderBy('created_at', 'asc')->paginate(10);
        $getPins = DB::select('select * from pins ');

        return view('teachers.show')->with(['users' => $user, 'campers' => $campers, 'teachers' => $teachers, 'adminPins' => $getPins]);

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

        $teachers = Teachers::orderBy('created_at', 'asc')->paginate(10);
        $campers = campers::orderBy('created_at', 'asc')->paginate(10);
        $getPins = DB::select('select * from pins ');

        return view('teachers.edit')->with(['users' => $user, 'campers' => $campers, 'teachers' => $teachers, 'adminPins' => $getPins]);

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
            $teachers->passport = $imgtoDb;
        }
        $teachers->save();

        return redirect()->route('teachers.show', $id)->with('success', 'Profile was updated successfully');
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