<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer_Admin extends CI_Controller{


	public function index(){

		$this->load->view('header_logged_staff');
		$this->load->view('volunteer_admin_view');
		$this->load->view('footer');
	}

}//end of class