<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . '../vendor/autoload.php';

class Pdf
{
	public function __construct()
	{
		
	}

	public function load($params = NULL)
	{
		return new \Mpdf\Mpdf($params);
	}
}