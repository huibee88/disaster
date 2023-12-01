<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends CI_Controller{


	function __construct(){
		parent::__construct();

		$this->load->model('Nadim','',TRUE);
	}

	public function index(){

		$data['info'] = $this->Nadim->getDisasterInfo();

		$this->load->view('header');
		$this->load->view('info', $data);
		$this->load->view('footer');
	}

}//end of class