<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer_Info extends CI_Controller{


	public function index(){

		$this->load->view('header_logged_staff');
		$this->load->view('volunteerinfo_view');
		$this->load->view('footer');
	}

}//end of class