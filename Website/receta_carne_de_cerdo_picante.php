<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
      echo '<script>
            alert("inicia session");
            window.location = "login.php";
        </script>';
        header("location: login.php");
        session_destroy();
        die();
    }
    include '../Website/php/conexion.php';
    $alv = $_SESSION['usuario'];
    $mostrarUsuario = "SELECT idUsuariosDM, nombre FROM usuariosdm WHERE idUsuariosDM='$alv'";

    $muestra = $conexion->query($mostrarUsuario);
      $row = $muestra->fetch_assoc();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Website/css/styleSearch.css"><link >
   <link rel="stylesheet" type="text/css" href="../Website/css/styleIndex.css"><link >
   <link rel="stylesheet" type="text/css" href="../Website/css/style-receta-de-cerdo.css"><link >
   <script src="https://kit.fontawesome.com/759f0e653c.js" crossorigin="anonymous"></script>
    <title>Carne de Cerdo</title>
  </head>
  <body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="menu">
  <div class="container-fluid">
    <a class="navbar-brand" href="../Website/index.php"><img src="../Website/images/logo0.png" alt="" width="85" height="38"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Website/index.php">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">NOSOTROS</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CATEGORIAS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">POLLO</a></li>
            <li><a class="dropdown-item" href="#">CARNE</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">PESCADO</a></li>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            TIPS
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">COCINA</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">COVID-19</a></li>
          </ul>
        </li>
        
      </ul>
       <li class="d-flex " id="ctn-icon-search">
        <i class="fas fa-search " id="icon-search" ></i>
      </li>
      
      <div class="dropdown mx-0">
      
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> 
    <?php echo('Bienvenid@');?></button>
  <ul class="dropdown-menu drop" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Perfil</a></li>
    <li><a class="dropdown-item" href="#">Configuraci??n</a></li>
    <li><a class="dropdown-item" href="php/cerrar_session.php">Cerrar Sesion</a></li>
  </ul>
</div>
    
    </div>
    
  </div>  
  
</nav>
    </header>
    
<div id="ctn-bars-search">
      <input  type="text" id="inputSearch" placeholder="??Qu?? deseas buscar?">
    </div>
<ul id="box-search" >
      <li><a href="login.html"><i class="fas fa-search"></i>Papas</a></li>
      <li><a href="#"><i class="fas fa-search"></i>Ensaladas</a></li>
      <li><a href="#"><i class="fas fa-search"></i>Pescado</a></li>
      <li><a href="plantilla-recetas.html"><i class="fas fa-search"></i>Pollo</a></li>
  </ul>
  <div id="cover-ctn-search"></div>
<section class="">
    <img src="../Website/images/banner-receta-cerdo.jpg" class="img-fluid cerdo" alt="..." >
    <h1 class=" titulos">CARNE DE CERDO PICANTE</h1>
</section>
<hr class=" bg-white">
<section class="container">
    <h2 class="text-start mt-2">INGREDIENTES</h2>
    <div class="secion-3">
        <div class="row">
        <article class="col-md-6 align-self-center" >
          <!-- align-self-center para centrado vertical-->
          
          <h3>Las unidades de medida, pueden variar seg??n al pa??s.</h3>
          <ul>
              <li>1 libra y media de carne cortada en trozos.</li>
              <li>1 cucharada comino.</li>
              <li>1 cucharada sal.</li>
              <li>1/2 taza agua.</li>
              <li>Aceite de oliva.</li>
              <li>Pimienta.</li>
              <li>Sal.</li>
          </ul>
        </article>
        <figure class="col-md-6">
          <img src="../Website/images/cerdo-01.jpg" alt="Nuestro equipo" class="img-fluid">
        </figure>  
        </div><!-- row -->
      </div>
</section>
<section class="container">
<h3 class="text-start mt-2">Preparaci??n</h3>
<p class="parrafos">Limpiamos los solomillos de posibles restos de pielecillas o grasa que puedan tener y cortamos en medallones m??s bien gorditos, 
    de 1,5 o 2 cm. de grueso. En una sart??n calentamos 2 o 3 cucharadas de aceite de oliva y salteamos la carne salpimentada. Yo 
    prefiero no cocinarla demasiado ya que podr??a quedarse dura, continuar?? su cocci??n m??s adelante con la salsa. Reservamos. La elecci??n 
    de las patatas es fundamental, pues este plato quiere ir bien acompa??ado. Las patatas no son todas iguales para fre??r, depende de la 
    cantidad de almid??n que contengan. En los supermercados ya venden patatas especiales para fre??r. Os recomiendo una patata gallega a ser 
    posible vieja, las nuevas llevan mucho almid??n. Pelamos las patatas y las picamos en panadera (en rodajas finas), en bastones (en tiras largas) 
    o en cuartos, elegid el tama??o que m??s os guste. Hay que intentar que todas sean m??s o menos igual, especialmente de grosor, para que se hagan 
    por igual. Despu??s las lavamos bien en un cuenco hasta que el agua fr??a para quitar el almid??n durante unos 5 minutos y secamos con un trapo 
    de algod??n. Reservamos.</p>
</section>

        <section id="video" >
        <div class="container">
           <div class="row">
            <div class="col-md-6">
              <table class="table table-bordered table-info">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nutrientes</th>
                    <th scope="col">Vitaminas</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Prote??na 43%</td>
                    <td>Vitamina B6 26%</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Grasa total 9%</td>
                    <td>Tiamina 66%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-6 embed-responsive embed-responsive-16by9">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/3Nkt7_buTRg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
              
          </div><!--row-->
        </div><!--container-->
      </section><!--Eventos-->


  <footer>
  <div class="container_footer">
    <div class="box_footer">
      <div class="logo">
        <img src="../Website/images/logo0.png" alt="" >
      </div>
      <div class="terminos">
        <p>Web dedicada a compartir contenido gastron??mico didactico, en busqueda de poder ayudar a la poblaci??n joven que no sabe cocinar
          y se han visto obligados a aprender en sus hogares, debido a la coyuntura del COVID-19.</p>
      </div>
    </div>
    <div class="box_footer">
      <h2>Tutoriales</h2>
      <a href="#">Platos Gourmet</a>
      <a href="#">Platos Ex??ticos</a>
      <a href="#">Prevencion COVID-19</a>
      <a href="#">Herramientas de Cocina</a>
    </div>
    <div class="box_footer">
      <h2>Compa??ia</h2>
      <a href="#">??Quienes somos?</a>
      <a href="#">Equipo de trabajo</a>
      <a href="#">Servicios</a>
      <a href="#">Socios</a>
    </div>
    <div class="box_footer">
      <h2>Redes Sociales</h2>
      <a href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
      <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
      <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
      <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
    </div>
  </div>
  <div class="box_copy">
    <hr>
    <p>Todos los derechos reservados ?? 2021 <b>RETI</b></p>
  </div>
</footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../Website/JS/buscador.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>