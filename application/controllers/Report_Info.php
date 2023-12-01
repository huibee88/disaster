<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_Info extends CI_Controller{


	public function index(){

		$this->load->view('header_logged_staff');
		$this->load->view('reportinfo_view');
		$this->load->view('footer');
	}

}//end of class