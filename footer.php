    <footer class="container-fluid pt-4 m-0 mt-5 g-0 footer__php">
    <nav class="navbar navbar-expand-md navbar-dark" >
        <div class="container-fluid  ">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse   " id="navbarSupportedContent">
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

                            <a class="nav-link active" href="cerrar.php"><lord-icon src="https://cdn.lordicon.com/rqskgpey.json" trigger="hover" style="width:40px;height:40px"> </lord-icon><span>Usuario: <?php echo $_SESSION['usuario'] ?> </span>  Cerrar Sesión</a> 
                        </div>
                   
                    </li>
                
                </ul>
            
            </div>
        </div>
    </nav>
    </footer>


</div><!--cierro el container -->

      <!-- popper boostrap cdn -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

      <!-- javascript de bootstrap Local -->
      <script src="resources\bootstrap-5.1.3-dist\js\bootstrap.bundle.min.js"></script>
      <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
<script src="envio.js"></script>
</body>
</html>
