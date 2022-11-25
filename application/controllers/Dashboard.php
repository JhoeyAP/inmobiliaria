<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$data['anuncios'] = $this->Dashboard_Model->listar();
		$this->load->view('templates/header');
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/footer');
	}

	public function vistaInsertar()
	{
		$this->load->view('templates/header');
		$this->load->view('insertarAnuncio/index');
		$this->load->view('templates/footer');
	}

	public function insertarAnuncio()
	{
		$data = $this->Dashboard_Model->agregar();

		echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
	}

	
	public function salir()
	{
		session_destroy();
		header("Location: http://localhost/inmobiliaria");
	}
}
