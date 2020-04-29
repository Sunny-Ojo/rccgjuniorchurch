<?php

namespace App\Http\Controllers;

use App\Exports\CampersExport;
use App\Exports\TeachersExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    //
    public function teachers()
    {
        return Excel::download(new TeachersExport, 'teachers.xlsx');

    }
    public function campers()
    {
        return Excel::download(new CampersExport, 'campers.xlsx');

    }

}