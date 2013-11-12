<?php

class Get_db extends CI_Model{
	function getAll(){
		$query = $this->db->query("SELECT * FROM test");
		return $query->result();
	}

	function insert1($data){
		$this->db->insert("test",$data);
	}

	function insert2($data){
		$this->db->insert_batch("test",$data);
	}
}