

<?php

session_start();
require '../funcs/conexion.php';
require '../funcs/funcs.php';

if (!isset($_SESSION["id_usuario"])){
  header("Location: ../index2.php");
}

$idUsuario = $_SESSION['id_usuario'];

$sql = "SELECT id, nombre FROM usuarios WHERE id = '$idUsuario'";
$result = $mysqli->query($sql);

$row = $result->fetch_assoc();

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Estilo CSS -->
    <link rel="stylesheet" href="../css/estilo.css">

    <title>Contacto TUBOLETAPREMIUM</title>
  </head>
  <body>
    <!-- Menu -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
      <a class="navbar-brand" href="../welcome.php">
        <img class="logotipo" src="../images/home/Logo.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    

      <h2><?php echo 'Hola  '.utf8_decode($row['nombre']); ?></h2>


      


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../welcome.php">Inicio <span class="sr-only">(current)</span></a>
          </li>

          

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Servicios
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Comidas</a>
              <a class="dropdown-item" href="escenario.php">Escenario</a>
              <a class="dropdown-item" href="contacto.php">Contacto</a>
            </div>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Eventos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="evento1.php">Talento U</a>
                <a class="dropdown-item" href="evento2.php">Franja Infantil</a>
                <a class="dropdown-item" href="evento3.php">The Mills</a>
                <a class="dropdown-item" href="evento4.php">Feid Para Todos</a>
                <a class="dropdown-item" href="evento5.php">La Etnnia</a>
                <a class="dropdown-item" href="evento6.php">Riosonica</a>
              </div>


</li>
				

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="../logout.php">Cerrar Sesi&oacute;n <span class="sr-only">(current)</span></a>
</li>
              

</div>

</nav>

</ul>


</div>

</div> <!-- Finaliza .container -->
    <li>
      <img class="iconos-redes-header" src="../images/varios/facebook-logo-button.svg" alt="Facebook">
      <img class="iconos-redes-header" src="../images/varios/instagram-logo.svg" alt="Instagram">
      <img class="iconos-redes-header" src="../images/varios/twitter-logo-button.svg" alt="Twitter">
    </li>
    </nav>

    
    <section class="altura-a-b">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6">
            <br>
            <br>
            <img class="img-fluid logocontacto altura-a-b" src="../images/Contacto/contacto.png" alt="Pantalla">
          </div>

          <div class="col-12 col-sm-6 altura-a-b">
            <br>
            <h2>CONTACTANOS</h2>
            <br>
            <p>Si tienes dudas sobre tus reservas o deseas obtener mayor informacion sobre algun evento o restricciones por COVID-19 no dudes en ponerte en contacto
              con nosotros mediante nuestro numero telefonico o correo electronico y con gusto resolveremos tus dudas.
            </p>
            <br>
            <br>
            <div class="row">
              <div class="col-12 col-sm-4">
                <button type="button" class="btn btn-primary" >TEL: 60769988899</button>
              </div>
              <div class="col-12 col-sm-4">
                <button type="button" class="btn btn-primary" >consultas@tuboletapremium.com</button>
              </div>
              
              
              
            </div>
            

          </div>
        </div>
      </div>


    </section>


    
    <footer >

      <img class="logotipo2" src="../images/home/Logo.png" alt=""logotipo2>
      <img class="iconos-redes-header" src="../images/varios/facebook-logo-button.svg" alt="Facebook">
      <img class="iconos-redes-header" src="../images/varios/instagram-logo.svg" alt="Instagram">
      <img class="iconos-redes-header" src="../images/varios/twitter-logo-button.svg" alt="Twitter">

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