<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/header.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/dashboard.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/insertAnuncio.css">
    <title>Inmobiliaria</title>
</head>
<body>
    <nav class="navbarI">
        <div class="d-flex justify-content-between align-items-center container">
            <span>LOGOTIPO</span>
            <ul class="d-flex menu gap-3" >
                <a href="<?= base_url() ?>" class="menuItem"><li>Inicio</li></a>
                <a href="" class="menuItem"><li>Propiedades</li></a>
                <a href="" class="menuItem"><li>Empresa</li></a>
                <a href="" class="menuItem"><li>Blog</li></a>
                <a href="" class="menuItem"><li>Contacto</li></a>
            </ul>
            <?php 
            // session_destroy();
                if (!$this->session->userdata('idUsuario')) { ?>
                <div class="d-flex gap-3">
                    <a class="boton botonLogin" type="button" href="<?= base_url() ?>index.php/Login">Iniciar Sesión</a>
                    <a class="boton botonRegistro" type="button" href="<?= base_url() ?>index.php/Registro">Registrarse</a>
                </div>
            <?php } else{ ?>
                <div class="d-flex gap-3">
                    <a class="boton botonLogin" type="button" href="<?= base_url() ?>index.php/Dashboard/vistaInsertar"><i class="fa-solid fa-plus me-2"></i>Publicar</a>
                    <a class="boton botonRegistro" type="button" href="<?= base_url() ?>index.php/Dashboard/salir">Salir</a>
                </div>
            <?php } ?>
            
        </div>
    </nav>



