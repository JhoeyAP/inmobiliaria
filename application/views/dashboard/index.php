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
<div class="contentAnuncios">
    <div class="container">
        <div class="d-flex justify-content-between mb-4 align-items-center contenedorTitulo">
            <h3 class="tituloAnuncioItem">Anuncios <span class="tituloAnuncioItem2">Destacados</span></h3>
            <button class="boton botonVerTodos" type="button">Ver Todos <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
        </div>
        <div class="row">
            <?php foreach($anuncios as $element) {?>
                <div class="col-4 mb-5">
                    <div class="card">
                        <img class="card-img-top" src="<?= $element->imagen ?>" alt="">
                        <div class="card-body d-flex flex-column gap-2">
                            <span class="d-block operacionCard"><?= $element->tipoOperacion ?></span>
                            <span class="d-block tituloCard" ><?= $element->titulo ?></span>
                            <span class="d-block detallesCard"><i class="fa-solid fa-location-dot"></i> <?= $element->ubicacion ?></span>
                            <span class="d-block detallesCard">Area Total: <?= $element->areaTotal ?>m²</span>
                            <div class="d-flex justify-content-between">
                                <span class="precioCard">S/ <?= $element->precio ?></span>
                                <button class="boton botonVerMas" type="button">Ver más</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>