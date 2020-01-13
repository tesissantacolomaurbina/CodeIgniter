<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE) {
			redirect('LoginController');
		}
		$this->load->model("BookModel");
		$this->load->model("AuthorModel");
		$this->load->model("UserBookModel");
	}
	// Index
	function index() {
		if($this->session->userdata('level') !== null ) {
			$data['result'] = $this->BookModel->getAllData();
			foreach($data['result'] as $row){
				$author =  $this->AuthorModel->getData($row->author_id);
				if ($author != null){
					$row->author_name = $author->name;
					//$row->author_id = $author->name;
				} else {
					$row->author_name = null;
				}
			}
			$this->load->view('bookView', $data);
		} else {
			echo "Access Denied!";
		}
	}
	public function create()
	{
		$this->BookModel->createData();
		redirect("BookController");
		//$this->load->view('bookView');
	}

	public function createfirst()
	{
		$data['result'] = $this->AuthorModel->getAllData();
		$this->load->view('bookCreate', $data);
	}

	public function edit($id)
	{
		$data['row'] = $this->BookModel->getData($id);
		$data['result'] = $this->AuthorModel->getAllData();
		$data['author'] = $this->AuthorModel->getAllDataOrderById($data['row']->author_id);
		
		$this->load->view('bookEdit', $data);
	}

	public function update($id)
	{
		$this->BookModel->updateData($id);
		redirect("BookController");
	}

	public function delete($id)
	{
		$books = $this->UserBookModel->getAllOneBookData($id);
		foreach($books as $row){
			$this->UserBookModel->deleteData($row->id);
		}
		$this->BookModel->deleteData($id);
		redirect("BookController");
	}

	public function reservar($id)
	{
		$user_id = $this->session->userdata('id');
		$this->UserBookModel->createData($id, $user_id);
		redirect("BookController");
	}
}
