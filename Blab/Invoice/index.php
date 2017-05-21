<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define("VIEWS_PATH", ROOT.DS."App".DS."views");
require_once ROOT.DS.'vendor'.DS.'autoload.php';

use Blab\Invoice\Libs\Capture\Capture;
$capture = new Capture([
				'envPath'=>'H:\xampp\htdocs\devcodeskill\Blab\Invoice\bin', // Set Global Path for phantomjs.exe
				// 'rootPath'=>'http://localhost/Blab/Invoice/views',
				'viewPath'=>ROOT.DS.'Blab'.DS.'Invoice'.DS.'views',
				'tempDir'=>ROOT.'/Blab/Invoice/storage',
				'captureJS'=>ROOT.'/Blab/Invoice/capture.js',// Capture javascript file path
				'capturePath'=>'http://localhost/Blab/Invoice/storage/',//must be use http:// or https://
			]);

		$date = date('Y-m-d');
		$capture->load("invoice.php",[

				'id'=>23596,
				'date'=>$date,
				'supplierName'=>'BITM',
				'supplierRegNo'=>29643,
				'suppilerVatNo'=>589423,
				'supplierDetails'=>'32/9, Kawran Bazar, Dhaka-1200',
				'customerName'=>'Md. Abu Ahsan Basir',
				'customerRegNo'=>167473,
				'customerVatNo'=>458234,
				'customerDetails'=>'47/19, New Chashara,Jamtola,Narayanganj',

			]);

		$capture->response('invoice.pdf');