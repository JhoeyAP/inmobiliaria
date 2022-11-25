<?php 

class Dashboard_Model extends CI_Model{

    public function listar(){

        $data = $this->db->select("anu.idAnuncio, anu.idUsuario, anu.titulo, anu.descripcion, anu.ubicacion, tOpe.tipoOperacion, tInm.tipoInmueble, det.habitaciones, det.areaTotal, det.precio, det.pisos, det.baños, img.imagen")
                        ->from('anuncios anu')
                        ->join('tipooperaciones tOpe','anu.idTipoOperacion = tOpe.idOperacion')
                        ->join('tipoinmuebles tInm','anu.idTipoInmueble = tInm.idInmueble')
                        ->join('detalles det','anu.idAnuncio = det.idAnuncio')
                        ->join('imagenes img','anu.idAnuncio = img.idAnuncio')
                        ->get()
                        ->result(); 
        return $data;
    }

    public function agregar(){
        $idUsuario= $this->session->userdata('idUsuario');
        
        // ANUNCIOS
        $id = $this->input->post('id');
        $titulo = $this->input->post('titulo');
        $descripcion = $this->input->post('descripcion');
        $tipoOperacion = $this->input->post('tipoOperacion');
		$tipoInmueble = $this->input->post('tipoInmueble');
		$ubicacion = "defecto";

        // DETALLES

        

        // IMAGEN


		$datos = array(
			"idUsuario" => $idUsuario,
			"titulo" => $titulo,
			"descripcion" => $descripcion,
            "ubicacion" => $ubicacion,
            "idTipoOperacion" => $tipoOperacion,
            "idTipoInmueble" => $tipoInmueble,
		);

       

        if($id == ""){
            // INSERTAR ANUNCIO
            $data = $this->db->insert("anuncios",$datos);
            $ultimoId = $this->db->insert_id();

            // INSERTAR DETALLE
            $datosDetalles = array(
                "idAnuncio" => $ultimoId,
                "habitaciones" => "5",
                "areaTotal" => "180",
                "precio" => "45.000",
                "pisos" => "2",
                "baños" => "2"
            );
            $this->db->insert("detalles",$datosDetalles);


            $datosImagenes = array(
                "idAnuncio" => $ultimoId,
                "imagen" => "https://www.construyehogar.com/wp-content/uploads/2014/08/Dise%C3%B1o-de-casa-moderna-de-una-planta.jpg",
            );
            // INSERTAR IMAGEN
            $this->db->insert("imagenes",$datosImagenes);

            

            if ($data){
                $msg = "ok";
            }else{
                $msg = "Error al agregar";
            }
            
        }else{
            $this->db->where("idAnuncio",$id);
            $data = $this->db->update("anuncios",$datos);
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