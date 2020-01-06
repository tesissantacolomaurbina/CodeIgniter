<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class RegisterController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('UserModel');
	}
	public function index()
	{
		$this->load->view('register_view');
	}

	function register(){
		$email  = $this->input->post('email',TRUE);
		$password  = $this->input->post('password',TRUE);
		$confirm_password  = $this->input->post('confirm-password',TRUE);
		$name  = $this->input->post('name',TRUE);
		if ($password != $confirm_password) {
			echo "<script>alert('password doen't match');history.go(-1);</script>";
		} else {
			$this->UserModel->createData();
			redirect('LoginController');
		}
		$this->load->view('register_view');
	}


	function logout() {
		$this->session->sess_destroy();
		redirect('LoginController');
	}
}