<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/headerLogin');
		$this->load->view('registro/index');
		$this->load->view('templates/footerLogin');
	}
}
