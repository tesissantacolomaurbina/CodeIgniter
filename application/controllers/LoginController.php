<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('LoginModel');
	}
	public function index()
	{
		$this->load->view('login_view');
	}
	function auth() {
		$email  = $this->input->post('email',TRUE);
		$password  = $this->input->post('password',TRUE);
		$result    = $this->LoginModel->check_user($email, $password);
		if($result->num_rows() > 0) {
			$data  = $result->row_array();
			$email = $data['email'];
			$id = $data['id'];
			$level = $data['level'];
			$sesdata = array(
				'email'		=> $email,
				'id' => $id,
				'level'     => $level,
				'logged_in' => TRUE
			);
            $this->session->set_userdata($sesdata);
			if($level === '1') {
				redirect('BookController');
			} else {
				redirect('BookController');
			}
		} else {
			echo "<script>alert('access denied');history.go(-1);</script>";
		}
		$this->load->view('login_view');
	}

	function logout() {
		$this->session->sess_destroy();
		redirect('LoginController');
	}
}