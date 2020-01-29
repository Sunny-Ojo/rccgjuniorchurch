<?php

namespace App\Http\Controllers;

use App\teachers;
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
        $teachers = teachers::orderBy('created_at', 'desc')->paginate(1);
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
        $this->validate($request,
            ['Title' => 'required',
                'Position' => 'required',
                'surname' => 'required',
                'firstName' => 'required',
                'gender' => 'required',
                'Department' => 'required',
            ]);
        $teachers = new teachers();
        $teachers->title = $request->Title;
        $teachers->position = $request->Position;
        $teachers->surname = $request->surname;
        $teachers->firstName = $request->firstName;
        $teachers->gender = $request->gender;
        $teachers->department = $request->Department;
        $teachers->save();
        return redirect('/confirm')->with('success', 'Thank you for registering for the Easter campout 2020...
            Please kindly know that if there"s any need for you to update your details, you"ll need to contact your area coordinator. Have a lovely campout!!!
            You can now leave the Website');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}