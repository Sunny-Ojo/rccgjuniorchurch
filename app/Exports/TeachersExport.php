<?php

namespace App\Exports;

use App\Teachers;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TeachersExport implements FromQuery, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function query()
    {
        return Teachers::select('id', 'surname', 'firstName',
            'title', 'position',
            'gender', 'department', 'created_at')->where('id', '>', 0);
    }

    public function headings(): array
    {
        return [
            'ID',
            'Surname',
            'First Name',
            'Title',
            'Position',
            'Gender',
            'Department',
            'Date Registered',
        ];
    }

}