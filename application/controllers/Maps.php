<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Maps extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('templates/maps_header');
		$this->load->view('maps/index');
	}

	public function laporan_pdf()
	{

		$data = array(
			"dataku" => array(
				"nama" => "Petani Kode",
				"url" => "http://petanikode.com"
			)
		);

		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-petanikode.pdf";
		$this->pdf->load_view('laporan_pdf', $data);
	}
}