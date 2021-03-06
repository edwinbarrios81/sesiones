<?php

	session_start();
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';

	if (!isset($_SESSION["id_usuario"])){
		header("Location: index2.php");
	}

	$idUsuario = $_SESSION['id_usuario'];

	$sql = "SELECT id, nombre FROM usuarios WHERE id = '$idUsuario'";
	$result = $mysqli->query($sql);

	$row = $result->fetch_assoc();
	
?>


<!doctype html>
<html lang="es">
	<head>
		
		<!-- aqui va el codigo mio -->

		<!-- Required meta tags -->
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Estilo CSS -->
    <link rel="stylesheet" href="css/estilo.css">
	</head>
	
	

<!-- 	hasta aqui va el codigo original  -->

<body>
    <!-- Menu -->

	


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
      <a class="navbar-brand" href="welcome.php">
        <img class="logotipo" src="images/home/Logo.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="welcome.php">Inicio <span class="sr-only">(current)</span></a>
                </li>


      

     

      
       
          
          <?php if($_SESSION['tipo_usuario']==1) { ?>
            <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link" href="http://localhost/phpmyadmin/">Adm Usuarios <span class="sr-only">(current)</span></a>
								
							</ul>
						<?php } ?>
          
          
          
          
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Servicios
            </a>                        
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="">Comidas</a>
              <a class="dropdown-item" href="eventosPHP/escenario.php">Escenario</a>
              <a class="dropdown-item" href="eventosPHP/contacto.php">Contacto</a>
              <a class="dropdown-item" href="eventosHTML/carrito.html">Carrito de compras</a>
            </div>

            <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Eventos
                  </a>                        
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                
                      <a class="dropdown-item" href="eventosPHP/evento1.php">Talento U</a>
                      <a class="dropdown-item" href="eventosPHP/evento2.php">Franja Infantil</a>
                      <a class="dropdown-item" href="eventosPHP/evento3.php">The Mills</a>
                      <a class="dropdown-item" href="eventosPHP/evento4.php">Feid Para Todos</a>
                      <a class="dropdown-item" href="eventosPHP/evento5.php">La Etnnia</a>
                      <a class="dropdown-item" href="eventosPHP/evento6.php">Riosonica</a>
                  </div>
              </li>

							<h2><?php echo 'Bienvenid@ '.utf8_decode($row['nombre']); ?></h2>

						
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="eventosHTML/carrito.html">Carrito de Compras <span class="sr-only">(current)</span></a>
          </li>




            <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="logout.php">Cerrar Sesi&oacute;n <span class="sr-only">(current)</span></a>
          </li>
							
          



					
				</div>
				
			</nav>

	

        </ul>
       <!--  <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form> -->
        
      </div>
      
    </div> <!-- Finaliza .container -->
    <li>
      <img class="iconos-redes-header" src="images/varios/facebook-logo-button.svg" alt="Facebook">
      <img class="iconos-redes-header" src="images/varios/instagram-logo.svg" alt="Instagram">
      <img class="iconos-redes-header" src="images/varios/twitter-logo-button.svg" alt="Twitter">
    </li>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/home/silvestre.jpg" class="d-block w-100" alt="Slider 01">
          <div class="carousel-caption d-none d-md-block">
            <h5>Silvestre</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/home/maluma.jpg" class="d-block w-100" alt="Slider 02">
          <div class="carousel-caption d-none d-md-block">
            <h5>Maluma</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/home/shakira.jpg" class="d-block w-100" alt="Slider 03">
          <div class="carousel-caption d-none d-md-block">
            <h5>Shakira</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <main>
      <section class="altura-a-b">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-4 text-center">
              <img class="img-fluid shadow-lg" src="images/home/banner1.jpg" alt="Banner1">
              <h5><br>TALENTU BUSINESS SHOW</h5>
              <p>Conoce Aqu?? tu concierto</p>
              <a href="eventosPHP\evento1.php" class="btn btn-primary" >Ver Detalles</a>
            </div>
            <div class="col-12 col-sm-4 text-center">
              <img class="img-fluid shadow-lg" src="images/home/banner2.jpg" alt="Banner2">
              <h5><br>FRANJA INFANTIL</h5>
              <p>Conoce Aqu?? tu concierto</p>
              <a href="eventosPHP/evento2.php" class="btn btn-primary" >Ver Detalles</a>
            </div>
            <div class="col-12 col-sm-4 text-center">
              <img class="img-fluid shadow-lg " src="images/home/banner3.jpg" alt="Banner3">
              <h5><br>THE MILLS EN CONCIERTO</h5>
              <p>Conoce Aqu?? tu concierto</p>
              <a href="eventosPHP/evento3.php" class="btn btn-primary" >Ver Detalles</a>
            </div>
          </div>
        </div>
      </section>

      <section class="altura-a-b" >
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-4 text-center">
              <img class="img-fluid shadow-lg" src="images/home/banner5.jpg" alt="Banner5">
              
              <h5><br>FEID PARA TODOS</h5>
              <p>Conoce Aqu?? tu concierto</p>
              <a href="eventosPHP/evento4.php" class="btn btn-primary" >Ver Detalles</a>
            </div>
            <div class="col-12 col-sm-4 text-center">
              <img class="img-fluid shadow-lg" src="images/home/banner4.jpg" alt="Banner4">
              <h5><br>LA ETNNIA</h5>
              <p>Conoce Aqu?? tu concierto</p>
              <a href="eventosPHP/evento5.php" class="btn btn-primary" >Ver Detalles</a>
            </div>
            <div class="col-12 col-sm-4 text-center">
              <img class="img-fluid shadow-lg" src="images/home/banner6.jpg" alt="Banner6">
              <h5><br>R??OSONICA</h5>
              <p>Conoce Aqu?? tu concierto</p>
              <a href="eventosPHP/evento6.php" class="btn btn-primary" >Ver Detalles</a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer >

      <img class="logotipo2" src="images/home/Logo.png" alt=""logotipo2>
      <img class="iconos-redes-header" src="images/varios/facebook-logo-button.svg" alt="Facebook">
      <img class="iconos-redes-header" src="images/varios/instagram-logo.svg" alt="Instagram">
      <img class="iconos-redes-header" src="images/varios/twitter-logo-button.svg" alt="Twitter">

    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
	
</html>		