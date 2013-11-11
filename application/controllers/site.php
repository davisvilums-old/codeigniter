<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index(){
		echo "Hi internet!";
		$this->hello();
	}

	public function hello(){
		 echo "Something else";
	}
}