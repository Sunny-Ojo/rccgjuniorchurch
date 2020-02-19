<?php

namespace App\Http\Controllers;

use App\campers;
use App\Teachers;
use PDF;

class PdfController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function download($id)
    {
        $users = campers::find($id);
        $pdf = PDF::loadview('slip', compact('users'));
        $pdf->setPaper('a5', 'portrait')->setWarnings(false);

        return $pdf->download('slip.pdf');
    }
    public function teachers($id)
    {
        $users = Teachers::find($id);
        $pdf = PDF::loadview('teachers', compact('users'));
        $pdf->setPaper('a5', 'portrait')->setWarnings(false);

        return $pdf->download('teacherSlip.pdf');
    }

}