<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/dashboard.css">
    <title>Inmobiliaria</title>
</head>
<body>
    <nav class="navbarI">
        <div class="d-flex justify-content-between align-items-center container">
            <span>LOGOTIPO</span>
            <ul class="d-flex menu gap-3" >
                <li class="menuItem">Inicio</li>
                <li class="menuItem">Propiedades</li>
                <li class="menuItem">Empresa</li>
                <li class="menuItem">Blog</li>
                <li class="menuItem">Contacto</li>
            </ul>
            <div class="d-flex gap-3">
                <a class="boton botonLogin" type="button" href="<?= base_url() ?>index.php/Login">Iniciar Sesión</a>
                <a class="boton botonRegistro" type="button" href="">Registrarse</a>
            </div>
        </div>
    </nav>



