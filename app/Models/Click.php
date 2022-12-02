<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Click extends Model
{
    use HasFactory;
    protected $fillable=['vacancy_ref','clicks'];
    
    function getClicks($ref){
	$v=preg_split("#/#", $ref);
	$result=Click::where('vacancy_ref', $v[0])->first('clicks');
	return $result['clicks'];
	}
    function getRef($ref){
	$v=preg_split("#/#", $ref);
	return $v[0];
	}
 public function save_click($id)
    {
	$rec=Click::where('vacancy_ref','=',$id)->first();
	if(!empty($rec))
	{$rec->update(['clicks'=> $rec['clicks'] +1]);}
	DB::insert('insert into click_records (vacancy_ref) values (?)', [$id]);
	return  redirect()->route('adverts');
    }	
	
    public function update_click($vacancies)
    {
	for($x = 0; $x < count($vacancies); $x++){
		$v=preg_split("#/#", $vacancies[$x]->vacancy_ref);
		if(Click::where('vacancy_ref','=',$v[0])->first() === null){
			Click::create(['vacancy_ref'=>$v[0],'clicks'=>0,]);			
		}
	}
	return;
     }
}
