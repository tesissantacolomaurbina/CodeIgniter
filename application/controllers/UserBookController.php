<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserBookController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE) {
			redirect('LoginController');
		}
		$this->load->model("BookModel");
		$this->load->model("UserBookModel");
		$this->load->model("AuthorModel");
	}
	function index() {
		if($this->session->userdata('level') !== null ) {
			$user_id = $this->session->userdata('id');
			$data['result'] = $this->UserBookModel->getUserData($user_id);
			foreach($data['result'] as $row){
				$book =  $this->BookModel->getData($row->book_id);

				$row->name = $book->name;
				$row->isbn = $book->isbn;
				$row->editorial = $book->editorial;
				$row->publish_year = $book->publish_year;

				$author =  $this->AuthorModel->getData($book->author_id);
				if ($author != null){
					$row->new_name = $author->name;
					$row->author_id = $author->name;
				} else {
					$row->new_name = null;
				}
			}
			$this->load->view('userBookView', $data);
		} else {
			echo "Access Denied!";
		}
	}

	public function devolver($id)
	{
		$this->UserBookModel->deleteData($id);
		redirect("UserBookController");
	}
}
