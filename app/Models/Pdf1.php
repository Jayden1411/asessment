<?php

namespace App\Models;

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

	class Pdf1 extends Dompdf{

	 public function __construct(){
		parent::__construct();
	 }
}

