<?php

namespace App\Exports;

use App\campers;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CampersExport implements FromQuery, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function query()
    {
        return campers::select('id', 'surname', 'firstName',
            'nameOfParents', 'parentContact',
            'area', 'zone', 'parish', 'dob', 'allergies', 'gender', 'created_at')->where('id', '>', 0);
    }
    public function headings(): array
    {
        return [
            'ID',
            'Surname',
            'First Name',
            'Name Of Parents',
            'Parents Contact Number',
            'Area',
            'Zone',
            'Parish',
            'Date of Birth',
            'Allergies',
            'Gender',
            'Date Registered',
        ];
    }

}