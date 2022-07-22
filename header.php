<?php ob_start(); #esto evita los errores de envios de headers
set_error_handler("var_dump");
include 'conexion.php';
session_start(); #inicializamos variables de sesion
 #si esta logueado lo dejo trabajar y sino lo mando al login de nuevo 
 if ( isset( $_SESSION['usuario'] )!='Admin'){
    header("location:login.php");
    die();
} ?>
<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nolberto Pirela">
    <meta name="description" content="Portfolio de Proyectos Relizados">
    <meta name="keywords" content="HTML, CSS, JavaScript, php, proyectos, diseño web, developer, backend, desarrollador, freelancer">
    <title>Nolberto P.- Portafolio</title>

    <!-- favicon -->
        <!-- favicon -->

        <link rel="apple-touch-icon" sizes="57x57" href="./img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="./img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="./img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="./img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="./img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="./img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="./img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="./img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="./img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="./img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="./img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon/favicon-16x16.png">
        <link rel="manifest" href="./img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="./img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- favicon -->

    <!-- favicon -->

    <!-- Hoja de estilo Local Boostrap -->
    <link rel="stylesheet" href="resources\bootstrap-5.1.3-dist\css\bootstrap.min.css">
    <!-- Hoja de estilo Local -->
    <link rel="stylesheet" href="css\style.css">


</head>
<body>
<div class="container-fluid ">
    <nav class="navbar navbar-expand-md navbar-light" >
        <div class="container-fluid ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 ">
                    <li class="nav-item">
                        <div class="p-3 d-flex ">
                        <a class="nav-link active" aria-current="page"  href="index_admin.php"><lord-icon src="https://cdn.lordicon.com/sygggnra.json" trigger="hover" style="width:40px;height:40px">
                            </lord-icon>Ver proyectos</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="p-3 d-flex ">
 
                            <a class="nav-link active" aria-current="page"  href="galeria.php"><lord-icon src="https://cdn.lordicon.com/osqwjgzg.json" trigger="hover" style="width:40px;height:40px"></lord-icon>Alta-baja-modificacion</a>
                        </div>
                   
                    </li>
                    <li class="nav-item">
                        <div class="p-3 d-flex ">
 
                            <a class="nav-link active" href="cerrar.php"><lord-icon src="https://cdn.lordicon.com/rqskgpey.json" trigger="hover" style="width:40px;height:40px"> </lord-icon>Cerrar Sesión de User: <span><?php echo $_SESSION['usuario']; ?></span>  </a> 
                        </div>
                   
                    </li>
                
                </ul>
            
            </div>
        </div>
    </nav>
   