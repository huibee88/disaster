<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->model('Nadim','',TRUE);
		$this->load->library('session');
		$this->load->helper('form');
	}

	public function index(){

		$data['latestInfo']=$this->Nadim->getLatestInfo();
		$data['countKKF']=$this->Nadim->checkCountKKF();
		$data['countPTT']=$this->Nadim->checkCountPTT();
		$data['countTR']=$this->Nadim->checkCountTR();
		$data['countPP']=$this->Nadim->checkCountPP();
		$data['countTPR']=$this->Nadim->checkCountTPR();
		$data['countRN']=$this->Nadim->checkCountRN();
		$this->load->view('header');
		$this->load->view('content-main', $data);
		$this->load->view('footer');
	}

	function addreport(){

		$this->load->library('form_validation');
		$data['content'] = "reportform";

		$this->form_validation->set_rules('plocation', 'Reported Location', 'trim|required');
		$this->form_validation->set_rules('pdisaster', 'Disaster Type', 'trim|required');
		$this->form_validation->set_rules('pdesc', 'Description', 'trim');
		$this->form_validation->set_error_delimiters('<div class="error_msg">', '</div>');

		if ($this->form_validation->run() == FALSE) {
			//Field validation failed. User redirected to login page
			$this->session->set_flashdata('status', '<div class="alert alert-danger text-center" style="width:100%">Error! Please Enter the Correct Information!</div>');
			redirect('http://localhost/disaster/Welcome');
			$this -> session -> unset_userdata('status');
		}
		else{
			//Binding from data from view into array $Data
			$data['plocation'] = $this->input->post('plocation');
			$data['pdisaster'] = $this->input->post('pdisaster');
			$data['pdesc'] = $this->input->post('pdesc');
			
			$photo = $this->input->post('pImage');
			
			//var_dump($_FILES['lImage']);
			$config['upload_path'] = './public/temp/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			$this->upload->do_upload('pImage');

			// if ($this->upload->do_upload('lImage')) {
			// 	//echo 'yes';
			// 	return true;
			// }else{
			// 	//echo $this->upload->display_errors();
			// 	return false;
			// }

			$upload_data = $this->upload->data();

			$data['pImg'] = file_get_contents($upload_data['full_path']);
			//Pass the $data to controller
			$result = $this->Nadim->insertNewReport($data);

			if ($result) {
				$this->session->set_flashdata('status', '<div class="alert_green" style="width:100%">New Report Was Successfully Added!</div>');
				redirect('http://localhost/disaster/Welcome');
				$this -> session -> unset_userdata('status');
			}else{
				$this->session->set_flashdata('status', '<div class="alert" style="width:500px">Error! Please Try Again!!</div>');
				redirect('http://localhost/disaster/Welcome');
				$this -> session -> unset_userdata('status');
			}
		}
	}

}//end of class