<?php

class Model_get extends CI_Model{
	public function getData($page){
		$query = $this->db->get_where("pagedata", array("page" => $page));
		return $query->result();
	}
}