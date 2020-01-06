<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserBookModel extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	function createData($id,$user_id)
	{
        $data = array(
            'book_id' => $id,
            'user_id' => $user_id,
        );
        $this->db->insert('user_book', $data);
    }

    function getAllData(){        
        $query = $this->db->get('user_book');
        return $query->result();
    }
         

    function getUserData($id){
        $query = $this->db->get_where('user_book', array('user_id' => $id));
        return $query->result();
    }

    function getAllOneBookData($id){
        $query = $this->db->get_where('user_book', array('book_id' => $id));
        return $query->result();
    }

    function deleteData($id)
	{
        $this->db->where('id', $id);
        $this->db->delete('user_book');
    }
    

}
