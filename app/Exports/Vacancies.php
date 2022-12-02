<?php

namespace App\Exports;

use App\Models\Vacancy;
use Maatwebsite\Excel\Concerns\FromCollection;

class Vacancies implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Vacancy::all();
    }
    public function export() 
	{
	   return Excel::download(new VacanciesExport, 'vacancies.xlsx');
	}

}
