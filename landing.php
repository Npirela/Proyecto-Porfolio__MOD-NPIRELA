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

    <!-- line icon cdn -->
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <!-- line icon cdn -->
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark  nav__color">
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
                                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#sobremi">Conoceme</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Portafolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#footer__contacto">Contacto</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index_admin.php">Admin</a>
                                </li>
                            </ul>
                        </div>
                </div>
        </nav>
    </header>
    <main class="">
        
        <div class="container-fluid m-0 p-0  main-sec__carousel">

            <div id="carouselExampleSlidesOnly"  class="carousel slide" data-bs-ride="carousel">
                <!-- <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div> -->
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="./img/tp-codo.png" class="d-block w-100 carouselitem__carru--img" alt="...">
                                           </div>
                    <?php #leemos proyectos 1 por 1
                        foreach($proyectos as $proyecto){ ?>
                        <div class="carousel-item">
                            <img src="imagenes/<?php echo $proyecto['imagen'];?>"class="d-block w-100 carouselitem__carru--img" alt="...">
                            
                        </div>

                    <?php } ?>
                <!-- </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
            </div>

        </div>

        <div class="container-fluid container__division  p-0">
            <div class="row row__division g-0 p-0 m-0 " id="sobremi">
                
                <div class="col-md-6 ">
                    <div class="container-fluid col__division--derecha g-0 p-4 overflow-auto">
                        <article class="texto__division--centrado" >
                            <div>
                                <img src="./img/Npirela.jpg" class="rounded img-fluid img__profile" alt="Nolberto Pirela fotografia">
                            </div>
                            <div>
                                <h2 >Nolberto Pirela</h2>
                                <hr>
                                <p class="texto__division--Justificado">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dolorum sunt cupiditate facere mollitia magnam eaque voluptate assumenda, exercitationem ipsa fuga blanditiis eum accusamus, facilis corrupti itaque, delectus amet? Saepe!
                                Eius, tempora iste ut, excepturi ullam enim nisi veritatis esse recusandae temporibus eligendi. Ducimus ipsum, earum veniam tenetur amet est ullam, facilis, quisquam possimus minus perspiciatis autem nihil aut unde.
                                Fugiat laborum impedit quos provident laudantium minima libero doloribus vitae commodi tenetur, voluptates sint reiciendis iure in quisquam soluta quod quo. Quis voluptas nostrum commodi, incidunt maxime at iure quia!
                                Deleniti velit magnam voluptatem aliquam quam minima adipisci, nihil aspernatur minus esse quasi amet nemo distinctio sit dolores qui recusandae. Laborum maxime, voluptatem deserunt placeat earum magnam tempore qui sit.
                                Suscipit minima ducimus minus fuga totam blanditiis atque reprehenderit nihil nesciunt ipsam perferendis iusto quae illum, velit accusamus aliquam perspiciatis facilis error, porro consectetur iure eaque? Dolore sit ratione quam.</p>
                            </div>
                        </article>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="col__division--izquierda g-0">

                    
                        <article class="texto__division--centrado">
                            <!-- <div class="container-fluid p-4 "> -->
                                <img src="./img/dual-screen/Word Art2.png" class="rounded img-fluid img__div--derecha" alt="mostrar palabras que describen nuestra forma de trabajo y lenguajes usados" srcset="">
                            <!-- </div> -->
                        </article>

                    </div>
                </div>

                <footer >
                    <section id="footer__contacto">
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

                    <div class="container-fluid">
                        <div class="container text-center">
                            <div class="row pt-4">
                              <div class="col">
                                <img src="./img/lenguajesicon/archivo-json.png" alt="json" srcset="" class="rounded img__foot-lengua">
                              </div>
                              <div class="col">
                                <img src="./img/lenguajesicon/html .png" alt="html" srcset="" class="rounded img__foot-lengua">
                              </div>
                              <div class="col">
                                <img src="./img/lenguajesicon/php.png" alt="php" srcset="" class="rounded img__foot-lengua">
                              </div>
                              <div class="col">
                                <img src="./img/lenguajesicon/py (1).png" alt="python" srcset="" class="rounded img__foot-lengua">
                              </div>
                              <div class="col">
                                <img src="./img/lenguajesicon/jss.png" alt="javascript" srcset="" class="rounded img__foot-lengua">
                              </div>
                            </div>
                          </div>
                    </div>
                    </section>
                  </footer>

            </div>
        </div>
        
    </main>
    








      <!-- popper boostrap cdn -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

      <!-- javascript de bootstrap Local -->
      <script src="resources\bootstrap-5.1.3-dist\js\bootstrap.bundle.min.js"></script>



</body>
</html>


<!-- https://wordart.com/7hmeljvukcx8/word-art -->