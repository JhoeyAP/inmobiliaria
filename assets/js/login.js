// ========== LOGIN ==========
function iniciarSesion() {
    alerta = $("#alerta");
    $.ajax({
        url: base_url + "index.php/Login/validar",
        method: "POST",
        dataType: "json",
        data: $("#frmLogin").serialize(),
        success: function(response){
            if (response == "ok") {
                alerta.addClass("d-none");
                window.location.href =  base_url;
            }else{
                alerta.removeClass("d-none");
            }
        }
    })
}

// ========== REGISTRO ==========

function registrar() {
    alerta = $("#alertaValidacion");
    nombre = $("#nombre").val();
    correo = $("#correo").val();
    clave = $("#clave").val();
    confirmar = $("#confirmarClave").val();


    if (nombre == "" || correo == "" || clave == "" || confirmar=="") {
        alerta.removeClass("d-none");
        alerta.html("Todos los campos son olbigatorios");
    }else{
        if (clave != confirmar) {
            alerta.removeClass("d-none");
            alerta.html("Las contraseñas no coinciden");
        }else{
            $.ajax({
                url: base_url + "index.php/Login/registrar",
                method: "POST",
                dataType: "json",
                data: $("#frmRegistro").serialize(),
                success: function(response){
                    if (response == "ok") {
                        alerta.addClass("d-none");
                        window.location.href =  base_url + "index.php/Login";

                    }else{
                        alerta.removeClass("d-none");
                        alerta.html(response);
                    }
                }
            })
        }
    }


}