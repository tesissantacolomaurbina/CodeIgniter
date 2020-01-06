<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthorModel extends CI_Model {

	public function __construct(){
		$this->load->database();
    }
    
    function getAllData(){
        $query = $this->db->get('author');
        // $query = $this->db->query('SELECT * FROM book');
        return $query->result();
    }

    function getAllDataOrderById($id){
        $query = $this->db->get_where('author', array('id' => $id));
        // $query = $this->db->query('SELECT * FROM book');
        return $query->row();
    }

    function getData($id){
        // $query = $this->db->get('book');
        // $query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
        // $query = $this->db->query('SELECT * FROM book');
        $query = $this->db->get_where('author', array('id' => $id));
        return $query->row();
    }

   

}
