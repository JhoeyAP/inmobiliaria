<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/headerLogin');
		$this->load->view('login/index');
		$this->load->view('templates/footerLogin');
	}
	public function validar(){

		$usuario = $this->input->post('usuario');
		$clave = $this->input->post('clave');

        $this->db->where('correo', $usuario);
        $this->db->where('clave',$clave);
        $data = $this->db->from('usuarios')->get()->row();
    
        if($data){
            $msg = "ok";
			$datosSession = array(
				'idUsuario' => $data->idUsuario,
				'nombre' => $data->nombre
			);
            $this->session->set_userdata($datosSession);
        }else{
            $msg = "Usuario o contraseña incorrecta";
        }

        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
	}

	public function registrar()
	{
		$data = $this->Login_Model->agregar();

        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
	}
}
