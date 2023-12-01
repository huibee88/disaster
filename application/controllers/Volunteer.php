<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->model('Nadim','',TRUE);
		$this->load->library('session');
		$this->load->helper('form');
	}

	public function index(){

		$this->load->view('header');
		$this->load->view('volunteer_view');
		$this->load->view('footer');
	}

	function register(){
		$this->load->library('form_validation');
		$data['content'] = "registerVolunteer";

		$this->form_validation->set_rules('vName', 'Name', 'trim|required');
		$this->form_validation->set_rules('vAge', 'Age', 'trim|required');
		$this->form_validation->set_rules('vGender', 'Gender', 'trim|required');
		$this->form_validation->set_rules('vEmail', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('vPhone', 'Phone Number', 'trim|required|regex_match[/^[0-9,-]{11}$/]');
		$this->form_validation->set_error_delimiters('<div class="error_msg">', '</div>');

		if ($this->form_validation->run() == FALSE) {
			//Field validation failed. User redirected to login page
			$this->session->set_flashdata('status', '<div class="alert alert-danger text-center" style="width:100%">Error! Please Enter the Correct Information!</div>');
			$this->load->view('header');
			$this->load->view('volunteer_view', $data);
			$this->load->view('footer');
			$this -> session -> unset_userdata('status');
		}
		else{
			//Binding from data from view into array $Data
			$data['vName'] = $this->input->post('vName');
			$data['vAge'] = $this->input->post('vAge');
			$data['vGender'] = $this->input->post('vGender');
			$data['vEmail'] = $this->input->post('vEmail');
			$data['vPhone'] = $this->input->post('vPhone');
			
			$photo = $this->input->post('vImage');
			
			//var_dump($_FILES['lImage']);
			$config['upload_path'] = './public/temp/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$this->upload->do_upload('vImage');

			// if ($this->upload->do_upload('lImage')) {
			// 	//echo 'yes';
			// 	return true;
			// }else{
			// 	//echo $this->upload->display_errors();
			// 	return false;
			// }

			$upload_data = $this->upload->data();

			$data['vImg'] = file_get_contents($upload_data['full_path']);
			//Pass the $data to controller
			$result = $this->Nadim->insertNewVolunteer($data);

			if ($result) {
				$this->session->set_flashdata('status', '<div class="alert_green" style="width:100%">New Report Was Successfully Added!</div>');
				$this->load->view('header');
				$this->load->view('volunteer_view', $data);
				$this->load->view('footer');
				$this -> session -> unset_userdata('status');
			}else{
				$this->session->set_flashdata('status', '<div class="alert" style="width:500px">Error! Please Try Again!!</div>');
				$this->load->view('header');
				$this->load->view('volunteer_view');
				$this->load->view('footer');
				$this -> session -> unset_userdata('status');
			}
		}

	}
}//end of class