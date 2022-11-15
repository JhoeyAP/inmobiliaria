<div class="principal">
    <div class="container d-flex justify-content-center">
        <div class="d-flex justify-content-between  align-items-center  contenidoPrincipal">
            <div class="d-flex flex-column gap-3 titulos">
                <h1 class="titulo">La casa de tus sueños esta aqui</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ratione laboriosam aut, vero accusamus fuga quisquam, facilis hic veniam architecto dolores ipsa harum esse assumenda amet eius? Blanditiis, assumenda odio.</p>
            </div>
            <div class="imagenBuscador">
                <img class="imgPrincipal" src="<?= base_url() ?>assets/img/imgPrincipal.jpg" alt="">
                <div class="contenidoBuscador">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <select id="my-select" class="form-select inputBuscador" name="">
                                    <option value="" disabled selected hidden>Ubicación</option>
                                    <option>Lima</option>
                                    <option>Ica</option>
                                    <option>Pisco</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select id="my-select" class="form-select inputBuscador" name="">
                                    <option>Alquiler</option>
                                    <option>Venta</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select id="my-select" class="form-select inputBuscador" name="" placeholder="Habitaciones">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-2">
                        <span class="labelRango">Rango de precios <span class="labelRangoNumeros">$200.000 a $450.000</span></span>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-8">
                            <input id="my-input" class="inputRange" type="range" name="" min="0" max="100">
                        </div>
                    </div>
                    <div>
                        <button class="boton botonBuscar" type="button">Buscar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>