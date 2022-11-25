<?php 

class Login_Model extends CI_Model{

    public function agregar(){
        
        $idUsuario= $this->session->userdata('idUsuario');

        $id = $this->input->post('id');
        $nombre = $this->input->post('nombre');
		$correo = $this->input->post('correo');
		$clave = $this->input->post('clave');
        $idRol = 1;
		// $tiempo = $this->input->post('tiempo');
		// $moneda = $this->input->post('moneda');
		// $recordario = $this->input->post('recordatorio');
		// $total = $this->input->post('total');

		$datos = array(
            // "id_usuario" => $id_user,
			"nombre" => $nombre,
			"correo" => $correo,
			"clave" => $clave,
            "idRol" => $idRol
			// "id_tiempo" => $tiempo,
			// "id_moneda" => $moneda,
			// "id_recordatorio" => $recordario,
            // "total" => $total
		);

        if($id == ""){
            $data = $this->db->insert("usuarios",$datos);
            if ($data){
                $msg = "ok";
            }else{
                $msg = "Error al agregar";
            }
            
        }else{
            $this->db->where("id",$id);
            $data = $this->db->update("usuarios",$datos);
            if ($data){
                $msg = "modificado";
            }else{
                $msg = "Error al actualizar";
            }
        }
        
        return $msg;
    }
}

?>