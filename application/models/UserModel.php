<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	function createData()
	{
        $data = array(
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'level' => '2'
        );
        $this->db->insert('user', $data);
    }    

}
