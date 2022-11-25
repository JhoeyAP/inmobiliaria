<div class="fondoLogin">
    <div class="container d-flex justify-content-center align-items-center contenedorLogin">
        <form class="d-flex flex-column gap-4 cardLogin" id="frmRegistro">
            <h5 class="mb-2 tituloLogin">Regístrate</h5>
            <input type="hidden" name="id">
            <div class="formInput">
                <input type="text" class="inputLogin" name="nombre" id="nombre" placeholder="Ingrese su nombre">
            </div>
            <div class="formInput">
                <input type="text" class="inputLogin" name="correo" id="correo" placeholder="Correo Electronico">
            </div>
            <div class="formInput">
                <input type="password" class="inputLogin" name="clave" id="clave" placeholder="Ingresa tu clave">
            </div>
            <div class="formInput">
                <input type="password" class="inputLogin" id="confirmarClave" placeholder="Confirma tu clave">
            </div>
            <div class="alert alert-danger d-none" role="alert" id="alertaValidacion">
                
            </div>

            <div class="">
                <button class="boton botonLogin" type="button" onclick="registrar()">Regístrate</button>
                <button class="boton botonFacebook" type="button">Regístrate con Facebook</button>
                <button class="boton botonGoogle" type="button">Regístrate con Google</button>
            </div>
            <span class="text-center">¿Ya tienes una cuenta? <a href="<?= base_url() ?>index.php/Login">Iniciar Sesión</a> </span>
            <!-- <span class="text-center"><a href="">Regresar</a> </span> -->
        </form>
    </div>
</div>