<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index(){
		$this->home();
	}

	public function home(){
		$data['title'] = "Home!";
		$data['var1'] = "2";
		$data['var2'] = "8";

		$this->load->model("math");

		$data['addTotal'] = $this->math->add($data['var1'],$data['var2']);
		$data['subTotal'] = $this->math->sub($data['var1'],$data['var2']);
		$this->load->view("view_home", $data);
	}

	function about() {
		$data['title'] = "About!";
		$this->load->view("view_about", $data);
	}

	function getValues(){
		$this->load->model("get_db");

		$data['results'] = $this->get_db->getAll();
		
		$this->load->view("view_db", $data);
	}
	function insertValues(){
		$this->load->model("get_db");

		$newRow = array(
			array(
				"name" => "sue"
			),
			array(
				"name" => "dylan"
			)
		);

		$this->get_db->insert2($newRow);
		echo "it has been added";
	}

	function updateValues(){
		$this->load->model("get_db");

		$newRow = array (
			array(
				"id" => 1,
				"name" => "sue"
			),
			array(
				"id" => 3,
				"name" => "dylan"
			),
			array(
				"id" => 4,
				"name" => "marcus"
			)
		);

		$this->get_db->update2($newRow);

		echo "it has been updated";
	}

	function deleteValues(){
		$this->load->model("get_db");

		$oldRow = array (
			"id" => 4
		);
		$this->get_db->delete1($oldRow);

		echo "deleted!";
	}

	function emptyValues(){
		$this->load->model("get_db");

		$oldRow = "test";
		$this->get_db->empty1($oldRow);

		echo "deleted everything!";
	}
}