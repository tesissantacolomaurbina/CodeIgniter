<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookModel extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	function createData()
	{
        $data = array(
            'name' => $this->input->post('name'),
            'isbn' => $this->input->post('isbn'),
            'editorial' => $this->input->post('editorial'),
            'publish_year' => $this->input->post('publish_year'),
            'author_id' => $this->input->post('author_id'),
        );
        $this->db->insert('book', $data);
    }

    function getAllData(){        
        $query = $this->db->get('book');

        // $query = $this->db->query('SELECT * FROM book');
        return $query->result();
    }
         

    function getData($id){
        // $query = $this->db->get('book');
        // $query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
        // $query = $this->db->query('SELECT * FROM book');
        $query = $this->db->get_where('book', array('id' => $id));
        return $query->row();
    }

    function updateData($id)
	{
        $data = array(
            'name' => $this->input->post('name'),
            'isbn' => $this->input->post('isbn'),
            'editorial' => $this->input->post('editorial'),
            'publish_year' => $this->input->post('publish_year'),
            'author_id' => $this->input->post('author_id'),
        );
        $this->db->where('id', $id);
        $this->db->update('book', $data);
    }

    function deleteData($id)
	{
        $this->db->where('id', $id);
        $this->db->delete('book');
    }
    

}
