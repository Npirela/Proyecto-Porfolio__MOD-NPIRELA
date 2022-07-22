<?php include 'conexion.php'; ?>
<?php $conexion = new conexion();
 /*$sql = "SELECT * FROM `proyectos`";
 $datos = $conexion->consultar($sql);*/
 $proyectos= $conexion->consultar("SELECT * FROM `proyectos`");?>
   <!DOCTYPE html>
   <html lang="es">
   <head>
       <meta charset="UTF-8">
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
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- line icon cdn -->
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <!-- line icon cdn -->


       <!-- animate css -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
     
   </head>
   <body class="body__indexphp">

   <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark  nav__color">
            <div class="container-fluid">
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
                                    <a class="nav-link active" aria-current="page" href="landing.php">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Portafolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contacto</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index_admin.php">Admin</a>
                                </li>
                            </ul>
                        </div>
                </div>
        </nav>
    </header>
       
        
 
        <div class="container  pb-4">
        
            <h2 class="text-center p-3 ">Galeria de Proyectos</h2>

            <div class ="row row-cols-1 row-cols-md-3 g-4">
                <?php #leemos proyectos 1 por 1
                foreach($proyectos as $proyecto){ ?>
                    <div class="col">
                        <div class="card card__body" >
                            <a>
                                <img class="card-img-top img__cards "  src="imagenes/<?php echo $proyecto['imagen'];?>" alt="">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title "><?php echo $proyecto['nombre'];?></h5>
                                <p class="card-text "><?php echo $proyecto['descripcion'];?></p>
                                <a href="<?php echo $proyecto['link'];?>" class="btn btn-primary" target="_blank">Ver Proyecto</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>


    <footer >
                    <section id="footer__contacto" >
                    <div class="row g-0 ">
                       <div class="container-fluid m-0 p-0 ">
                            <ul class="nav justify-content-center bg-dark ">
                                <li class="nav-item">
                                    <a class="nav-link active  " aria-current="page" href="https://www.linkedin.com/in/nolberto-j-pirela/" target="_blank" ><i class=" lni lni-linkedin-original   " style="font: 2rem;"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="mailto:pirela_np@hotmail.com" target="_blank"><i class="lni lni-envelope "></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" target="_blank"><i class="lni lni-whatsapp "></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled " href="#" target="_blank"><i class="lni lni-instagram "></i></a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                    </section>

                    <section>
                    <div id="contact" class="container text-center ">
        <header>
            <h2 class="m-4">Contactame</h2>
        </header>
    
        <div class="container d-flex justify-content-center">
            <div class="border-3 col-8 pb-3"  >
                <form action="enviar.php" method='post' >
                        <div class=" row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" id="name" placeholder="Nombre" data-toggle="tooltip" data-placement="top" title="Su Nombre" autocomplete="name" required>
                            </div>
                            <div class="col">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" data-toggle="tooltip" data-placement="top" title="example@domain.com" autocomplete="email" required>
                            </div>
                            <br>
                            <div id="emailHelp" class="form-text">No compartiremos su correo electrónico con nadie más.</div>
                        </div>
                        <div class="mb-3">
                        
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Motivo" required>
                            <br>
                            <textarea class="form-control" name="contenido" id="contenido" cols="10" rows="5" placeholder="Mensaje" required></textarea>
                        </div>

                        
                        <button class="btn btn-secondary" ><a  id='WSP'  href="" Target="_blank">Enviar Whatsapp</a></button>
                        <button type="submit" class="btn btn-primary"> Enviar Mail </button>
                </form>
            </div>
        </div>
    </div>
                    </section>
                  </footer>
 
 <script src="envio.js"></script>
</body>
</html>
   
   
   
  
    
   
