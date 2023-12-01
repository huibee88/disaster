<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoManage extends CI_Controller{


	function __construct(){
		parent::__construct();

		$this->load->model('Nadim','',TRUE);
	}

	public function index(){

		$data['info'] = $this->Nadim->getDisasterInfo();

		$this->load->view('header_logged_staff');
		$this->load->view('info_manage', $data);
		$this->load->view('footer');
	}

}//end of class