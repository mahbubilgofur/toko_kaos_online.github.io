<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends CI_Controller {

	
	public function index()
	{
        
		$this->load->view('dasboard/header');
		$this->load->view('dasboard/navbar');
		$this->load->view('dasboard/content');
		$this->load->view('dasboard/footer');
	}
}
