<?php

namespace App\Exports;

use App\Models\Vacancy;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class VacancyExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Vacancy::all();
    }
    public function headings(): array
    {
       return [
         '#',
         'Company Ref',
         'Vacancy Ref',
         'Job Title',
         'Salary Max',
         'Start Date',
         'Expiry Date'
       ];
    }
    
}
