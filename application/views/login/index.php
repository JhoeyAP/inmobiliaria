<div class="fondoLogin">
    <div class="container d-flex justify-content-center align-items-center contenedorLogin">
        <form class="d-flex flex-column gap-4 cardLogin" id="frmLogin">
            <h5 class="mb-2 tituloLogin">Iniciar Sesión</h5>
            <div class="formInput">
                <input type="text" class="inputLogin" name="usuario" placeholder="Usuario o Correo Electronico">
            </div>
            <div class="formInput">
                <input type="password" class="inputLogin" name="clave" placeholder="Ingresa tu clave">
            </div>
            <div class="alert alert-danger d-none" role="alert" id="alerta">
                Usuario o contraseña incorrecta
            </div>
            <div class="form-check my-2">
                <input id="my-input" class="form-check-input" type="checkbox" name="" value="true">
                <label for="my-input" class="form-check-label">Recordar contraseña</label>
            </div>
            <div class="">
                <button class="boton botonLogin" type="button" onclick="iniciarSesion()">Iniciar Sesión</button>
                <button class="boton botonFacebook" type="button">Ingresar con Facebook</button>
                <button class="boton botonGoogle" type="button">Ingresar con Google</button>
            </div>
            <div class="d-flex flex-column">
                <span class="text-center">¿Aún no tienes una cuenta? <a href="<?= base_url() ?>index.php/Registro">Registrate aquí</a> </span>
                <span class="text-center"><a href="<?= base_url() ?>index.php/Dashboard">Regresar</a> </span>
            </div>
        </form>
    </div>
</div>