<?php
    include 'bd_Config/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Libreria Los Tainos</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/Btn.css" rel="stylesheet" />
        <link href="css/LibrosyAutores.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Menu de navegacion-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Libreria Los Tainos</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="./index.php">Inicio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="./Autores.php">Autores</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="./Libros.php">Libros Disponibles</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="./index.php">Sobre Nosotros</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="./Contacto.php">Contactos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Bienvenido a La Libreria Los Tainos</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">La Libreria mas completa del pais</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="LibrosPopulares">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Libros Populares</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <!--Parte PHP-->
                <?php
                    $titulos = new DBGestionLibreria;
                    $libros = $titulos->getlibros();
                    //var_dump($libros);
                    foreach($libros as $registro) {
                        //print_r($registro);
                        print('<p class="Filas" >'. $registro ['titulo'].'</p>');

                    }
                    
                ?>
                <!---Boton De Libros Disponibles--->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="./Libros.php">
                        <i class="fa fa-book"></i>
                        Libros Disponibles
                    </a>
                </div>
            </div>
        </section> 

        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="AutoresMasReconocidos">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Autores mas reconocidos</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                
                 <!--Parte PHP-->
         <?php
                    $nombres = new DBGestionLibreria;
                    $autores = $nombres->getautores();
                    //var_dump($libros);
                    foreach($autores as $registro) {
                        print('<p class="Filas">'. $registro ['nombre'].'</p>');
                    }
                    
                ?>

                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="./Autores.php">
                    <i class="fa fa-user"></i>
                        Autores
                    </a>
                </div>
            </div>
        </section>

        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="SobreNosotros">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Sobre Nosotros</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">La libreria los Tainos, ubicada en la mítica ciudad de Santo Domingo,Republica Dominicana Esta fue fundada en el año 2005 por el presidente de ese momento Leonel Fernandez. Concebida como un refugio del conocimiento, albergaba libros de todo tipo desde Libros de historia hasta fantasia.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Esta libreria es considerada una de las mas completas del pais ya que no solo tiene mucha variedad sino tambien que facilitamos la búsqueda de información.</p></div>
                </div>

            </div>
        </section>
        
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            2215 John Daniel Drive
                            <br />
                            Clark, MO 65243
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/" target="_blank"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://x.com/i/flow/login" target="_blank"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/feed/" target="_blank"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">ACERCA DEL CREADOR</h4>
                        <p class="lead mb-0">
                            Nombre: Manuel Rosario <br> Contacto: manuel23osvaldo@gmail.com
                          <!--<a href="http://startbootstrap.com">Start Bootstrap</a>-->
                        
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Derechos de autor &copy; Su sitio web 2023</small></div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
