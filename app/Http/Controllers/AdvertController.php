<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SoapClient;
use App\Models\Click;
use App\Models\Vacancy;
use App\Models\Pdf1;
use App\Models\ClickRecord;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class AdvertController extends Controller
{

     public function __construct(){
        $this->click = new Click();
        $this->vacancy = new Vacancy();
    }
    public function index()
    {
	$php_filter = array(
		//array('field' => 'job_description', 'value' => 'PHP', 'operator' => 'exact')
	);
	$vacancies =self::get_data($php_filter);
	$this->click->update_click($vacancies); 
	$this->vacancy->update_vacancies($vacancies); 
	return view('adverts.index',compact('vacancies'));
    }
    
     public function adverts()
    {
	$php_filter = array(
		//array('field' => 'job_description', 'value' => 'PHP', 'operator' => 'exact')
	);
	$vacancies =self::get_data($php_filter);	
	$views=Click::all();
	 return view('adverts.myadverts',compact(['vacancies','views']));
    }
    
      public function get_data($php_filter)
    {
	$wsdl = "https://webapp.placementpartner.com/ws/clients/?wsdl";
	$username = 'parallel';
	$password = 'parallel';
	$client = new SoapClient($wsdl, array('cache_wsdl' => WSDL_CACHE_NONE) );
	$session_id = $client->login($username, $password);
	$php_filter = array(
		//array('field' => 'job_description', 'value' => 'PHP', 'operator' => 'exact')
	);
	return $client->getAdverts($session_id, $php_filter);
    }

     public function click($id)
    {
	$this->click->save_click($id);
	return  redirect()->route('adverts');
    }
  
}
