<?php ob_start(); ?>
<?php session_start();
    #validar datos
    if ($_POST){
      #conexion a la base
      #mail
      #contraseña
      #es_admin s o n 
      /*
      select es_admin
      from usuarios where
      mail="" and contraseña = "";*/
        if( ($_POST['email']=="administrador") && ($_POST['pass']=='Contrarevision*') ){
          $_SESSION['usuario']="Admin";
          $_SESSION['logueado']='S';
          #redirecciono porque ingreso ok 
          header("location:index_admin.php");
          die();
         // exit;
        }
        else{
           echo '<script> alert("Usuario y/o Contraseña incorrecta");</script>';
           header("location:index.php");
          
           die();
        }
    }?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nolberto Pirela">
    <meta name="description" content="Administracion de la pagina">
    <meta name="keywords" content="HTML, CSS, JavaScript, php, proyectos, diseño web, developer, backend, desarrollador, freelancer">
    <title>Administracion - npirela </title>

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


    <!-- Hoja de estilo Local Boostrap -->
    <link rel="stylesheet" href="resources\bootstrap-5.1.3-dist\css\bootstrap.min.css">
    <!-- Hoja de estilo Local -->
    <link rel="stylesheet" href="css\style.css">



     
    
</head>
<body>





    





    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark  nav__color">
            <div class="container-fluid r">
                <a class="navbar-brand d-flex align-content-center" href="#">
                    <img src="img\logo\logoo.png" alt="" width="100" height="60">
                    <span id="titulo-nav-index" class="ms-2"><b>PIRELA</b></span>
                </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link " href="landing.php">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Portafolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"  href="#">Admin</a>
                                </li>
                            </ul>
                        </div>
                </div>
        </nav>
    </header>







    <div class="container-fluid m-0 p-0 div__adm">
        <div class="row g-0 ">
            <div class="col-md-6 div__izquierda">
                <div class="container p-4">
                    <div class="container-fluid text-center mb-4">
                        <img src="./img/logo/logoo.png" class="img-fluid" alt="" srcset="">
                    </div>
                    <form action="login.php" method="post"> 
                        <div class="form-floating mb-3">
                            <input type="text" name="email" id="email" class="form-control"  placeholder="name@example.com or Username"  required>
                            <label for="floatingInput">Usuario / email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control"  name="pass" id="subject" placeholder="Contraseña" required>
                            <label for="floatingPassword">Contraseña</label>
                        </div>
                        <div class="form-floating gap-4 d-md-flex justify-content-center">
                            <button type="submit" value="Enviar" class="btn btn-primary btn-lg">Acceder</button>
                            <button type="reset" class="btn btn-secondary btn-lg">Borrar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 div__derecha">
            <article class="text-center p-5">
                <h2>
                    Bienvenido al Area de Administracion 
                </h2>
                <p>Esta Area es para la Administracion de la Pagina, si no eres su dueño regresa al <a href="landing.php">Inicio</a> </p>
            </article>
            </div>

        </div>
      </div>








      
      <!-- popper boostrap cdn -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

      <!-- javascript de bootstrap Local -->
      <script src="resources\bootstrap-5.1.3-dist\js\bootstrap.bundle.min.js"></script>
</body>
</html>