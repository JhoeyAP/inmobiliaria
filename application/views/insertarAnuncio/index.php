<div class="principal">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="contenedorAnuncio">
            <div class="row m-0 my-4">
                <h4 class="tituloNombre">
                    Hola <?php echo $this->session->userdata('nombre') ?> ahora ya puedes publicar tus anuncios.
                </h4>
            </div>
            <div class="row m-0 h90">
                <div class="col-3 h90">
                    <ul class="menuInsert" id="menuInsert">
                        <li class="menuInsertItem active" id="operacion">Operación y tipo de inmueble</li>
                        <li class="menuInsertItem" id="ubicacion">Ubicación</li>
                        <li class="menuInsertItem" id="caracteristicas">Características</li>
                        <li class="menuInsertItem" id="multimedia">Multimedia</li>
                    </ul>
                </div>
                <div class="col h90 padre">
                    <form method="post" action="" id="frmAnuncios">
                        <input type="hidden" id="id" name="id">
                        <fieldset>
                            <div class="row mb-4">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="titulo" class="labelInsert">Titulo del Anuncio</label>
                                        <input id="titulo" class="inputInsert form-control" type="text" name="titulo" placeholder="Ingrese su titulo">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="descripcion" class="labelInsert">Descripción del Anuncio</label>
                                        <input id="descripcion" class="inputInsert form-control" type="text" name="descripcion" placeholder="Ingrese su descripción">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="my-select" class="labelInsert">Tipo de Operación</label>
                                        <select id="tipoOperacion" class="inputInsert form-select" name="tipoOperacion">
                                            <option value="1">Alquiler</option>
                                            <option value="2">Proyecto</option>
                                            <option value="3">Venta</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="my-select" class="labelInsert">Tipo de Inmueble</label>
                                        <select id="tipoInmueble" class="inputInsert form-select" name="tipoInmueble">
                                            <option value="" disabled selected hidden>Seleccione el tipo de inmueble</option>
                                            <option value="1">Casas</option>
                                            <option value="2">Departamentos</option>
                                            <option value="3">Locales</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="my-select" class="labelInsert">Subtipo de Inmueble</label>
                                        <select id="subtipoInmueble" class="inputInsert form-select" name="subtipoInmueble">
                                            <option value="" disabled selected hidden>Seleccione el subtipo de inmueble</option>
                                            <option value="1">Casas</option>
                                            <option value="2">Departamentos</option>
                                            <option value="3">Locales</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- <button type="button" class="previous boton botonRegresar posicionarRegreso">Regresar</button> -->
                            <button type="button" class="next boton botonSiguiente posicionar">Siguiente</button>
                        </fieldset>
                        <fieldset>
                            <h2>Ubicación</h2>
                            <button type="button" class="previous boton botonRegresar posicionarRegreso">Regresar</button>
                            <button type="button" class="next boton botonSiguiente posicionar">Siguiente</button>
                        </fieldset>
                        <fieldset>
                            <h2>Características</h2>
                            <button type="button" class="previous boton botonRegresar posicionarRegreso">Regresar</button>
                            <button type="button" class="next boton botonSiguiente posicionar">Siguiente</button>
                        </fieldset>
                        <fieldset>
                            <h2>Multimedia</h2>
                            <button type="button" class="previous boton botonRegresar posicionarRegreso">Regresar</button>
                            <button type="button" class="boton botonSiguiente posicionar" onclick="publicarAnuncio()">Enviar</button>
                        </fieldset>
                    </form>               
                </div>
            </div>
        </div>
    </div>
</div>
