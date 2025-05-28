<?php
    include ("bd_Config/ConfigPag.php");
    $usuario = "SELECT * FROM autores";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria Los Tainos|Autores</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
      <link href="css/styles.css" rel="stylesheet" />
      <link href="css/LibrosyAutores.css" rel="stylesheet" />
</head>
<body>
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
 <!--Parte PHP-->
 
                <!---    /*$nombres = new DBGestionLibreria;
                    $autores = $nombres->getautores();
                    //var_dump($autores);
                    foreach($autores as $registros) {
                       /*print('<p>'. $registros ['nombre'].'</p>'); 
                       print('<p>'. $registros ['apellido'].'</p>');
                       //print('<p>'. $registros ['pais'].'</p>');
                    }
                
                ?>--->

        <table>
        <tr>
                <th>Nombre</th>
                <th>apellido</th>
                <th>Pais</th>
                <th>estado</th>
            </tr>
            <?php $resultado= mysqli_query($conexion, $usuario);
            
            while($row=mysqli_fetch_assoc($resultado)) {?>
            <tr>
                <td class="Filas"><?php echo $row["nombre"];?></td>
                <td class="Filas"><?php echo $row["apellido"];?></td>
                <td class="Filas"><?php echo $row["pais"];?></td>
                <td class="Filas"><?php echo $row["estado"];?></td>
            </tr>
            <?php }?>
        </table>






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