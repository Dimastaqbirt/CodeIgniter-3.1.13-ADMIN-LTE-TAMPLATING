<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function process()
	{
		$post = $this->input->post(null,TRUE);
		if(isset($post)){
			echo "proses login";
		}		else {
			echo "tidak ada post";
		}
	}
}
