<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vacancy extends Model
{
    use HasFactory;
    protected $fillable=['company_ref','vacancy_ref','job_title','salary_max','start_date','expiry_date'];    

    
    public function update_vacancies($vacancies)
    {
	for($x = 0; $x < count($vacancies); $x++){
	if(empty(DB::select('select * from vacancies where vacancy_ref = :id', ['id' => $vacancies[$x]->vacancy_ref]))){
			DB::insert('insert into vacancies (company_ref,vacancy_ref,job_title,salary_max,start_date,expiry_date) 
			values (?, ?,?, ?,?, ?)', 
			[$vacancies[$x]->company_ref,$vacancies[$x]->vacancy_ref,$vacancies[$x]->job_title,$vacancies[$x]->salary_max,$vacancies[$x]->start_date,$vacancies[$x]->expiry_date]);
		}
	}
	return;
     }
}
