<?php
		session_start();
		require 'funcs/conexion.php';
		require 'funcs/funcs.php';

	$errors = array();

	if (!empty($_POST))
	{
		$usuario = $mysqli->real_escape_string($_POST['usuario']);
		$password = $mysqli->real_escape_string($_POST['password']);

		if (isNullLogin($usuario, $password))
		{
			$errors[]= "debe llenar todos los campos";
		}

		$errors[] = login ($usuario, $password);
}


	//hasta aqui va el código PHP del Vídeo
	
?>



<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			
    	
				
		<title>Login</title>
		

		<!-- esto es lo que rescate de la pagina de hans -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<!-- Estilo CSS -->
<link rel="stylesheet" href="css/estilo.css">

<link rel="stylesheet" href="css/bootstrap.min.css" >
					
	</head>

<header>
 <!-- Menu -->

 <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
      <a class="navbar-brand" href="index.html">
        <img class="logotipo" src="images/home/Logo.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Catalogo Eventos <span class="sr-only">(current)</span></a>
          </li>         
                            
        
	  
</header>

	<!-- hasta aqui parte dos de lo rescatado de hans -->
	
	<body>


		
		<div class="container">    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">Iniciar Sesi&oacute;n</div>
						<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="recupera.php">¿Se te olvid&oacute; tu contraseña?</a></div>
					</div>     
					
					<div style="padding-top:30px" class="panel-body" >
						
						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						
						<form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="usuario o email" required>                                        
							</div>
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="password" type="password" class="form-control" name="password" placeholder="password" required>
							</div>
							
							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
									<button id="btn-login" type="submit" class="btn btn-success">Iniciar Sesi&oacute;n</a>
									
								</div>
							</div>

					
							
							
							<div class="form-group">
								<div class="col-md-12 control">
									<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
										No tienes una cuenta!  <a href="registro.php" class="btn btn-primary" >Registrate Aquí </a>
										
													<!-- <a href="registro.php">Registrate aquí</a> -->
									</div>
								</div>
							</div>    
						</form> 
						<?php echo resultBlock($errors); ?>
					</div>                     
				</div>  
			</div>
		</div>
	</body>

	<footer >

<img class="logotipo2" src="images/home/Logo.png" alt=""logotipo2>
<img class="iconos-redes-header" src="images/varios/facebook-logo-button.svg" alt="Facebook">
<img class="iconos-redes-header" src="images/varios/instagram-logo.svg" alt="Instagram">
<img class="iconos-redes-header" src="images/varios/twitter-logo-button.svg" alt="Twitter">

</footer>

</html>						