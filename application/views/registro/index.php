<div class="fondoLogin">
    <div class="container d-flex justify-content-center align-items-center contenedorLogin">
        <div class="d-flex flex-column gap-4 cardLogin">
            <h5 class="mb-2 tituloLogin">Regístrate</h5>
            <div class="formInput">
                <input type="text" class="inputLogin" placeholder="Usuario o Correo Electronico">
            </div>
            <div class="formInput">
                <input type="text" class="inputLogin" placeholder="Ingresa tu clave">
            </div>
            <div class="formInput">
                <input type="text" class="inputLogin" placeholder="Confirma tu clave">
            </div>

            <div class="">
                <button class="boton botonLogin" type="button">Iniciar Sesión</button>
                <button class="boton botonFacebook" type="button">Registrate con Facebook</button>
                <button class="boton botonGoogle" type="button">Registrate con Google</button>
            </div>
            <span class="text-center">¿Ya tienes una cuenta? <a href="<?= base_url() ?>index.php/Login">Iniciar Sesión</a> </span>
            <!-- <span class="text-center"><a href="">Regresar</a> </span> -->
        </div>
    </div>
</div>