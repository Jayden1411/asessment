<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pdf1;
use App\Models\ClickRecord;
use Illuminate\Support\Facades\DB;


class DocumentController extends Controller
{

    public function create_pdf()
     {
		$data=DB::SELECT("SELECT `click_date`,count(`vacancy_ref`) as clicks FROM `click_records` group by `click_date`");
		$xdata = array_map(function($obj){
		    return (array) $obj;
		}, $data);
			
		return view('documents.index')->with('data', $xdata);
     }

	public function save_pdf(Request $request){
		if(isset($request->hidden_html) && $request->hidden_html != '')
		{
			 $file_name = 'google_chart.pdf';
			 $html = '<link rel="stylesheet" href="bootstrap.min.css">';
			 $html .= $request->hidden_html;
			 $pdf = new Pdf1();
			 $pdf->load_html($html);
			 $pdf->render();
			 $pdf->stream($file_name, array("Attachment" => false));
		}
     }
}
