<?php
	
	require 'funcs/conexion.php';
	require 'funcs/funcs.php';
	
	$errors = array();
	

	//Aqui inicia el  código PHP
	if(!empty($_POST)) 
{

$nombre = $mysqli->real_escape_string($_POST['nombre']);
	$usuario = $mysqli->real_escape_string($_POST['usuario']);
	$password = $mysqli->real_escape_string($_POST['password']);
	$con_password = $mysqli->real_escape_string($_POST['con_password']);
	$email = $mysqli->real_escape_string($_POST['email']);
	$captcha = $mysqli->real_escape_string($_POST['g-recaptcha-response']);

	
	$activo = 0;
	$tipo_usuario = 2;
	$secret ="6LcYhGIeAAAAACVtS7EG5uvPaG2nKsMaSTLhqqPK";


	if(!$captcha){
					$errors[] = "porfavor verifica el captcha";
				}

//validaciones

if (isNull($nombre, $usuario, $password, $con_password, $email))

{
	$errors[] = "debe llenar todos los campos";
}

if(!isEmail($email))
{
	$errors[] = "Direccion de correo Invalida";
}

if(!validaPassword($password, $con_password))
{
	$errors[] = "Las contraseñas no coninciden";
}
	
	if(usuarioExiste($usuario))
	{
		$errors[]= "el nombre de usuario $usuario ya existe";
	}


	if(emailExiste($email))

	{
		$errors[]= "el correo electronico $email ya existe";
	}

	if(count($errors) == 0)

	{


		$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
		$arr = json_decode($response, TRUE);

	
		if($arr['success'])
		{ 
	
		$pass_hash = hashPassword($password);
		$token = generateToken();

		$registro = registraUsuario ($usuario, $pass_hash, $nombre, $email, $activo, $token, $tipo_usuario);

	if($registro > 0)
	{
		$url = 'http://'.$_SERVER["SERVER_NAME"].
		'/sesiones/activar.php?id='.$registro.'&val='.$token; /* configurar el servidor para activar  */

		$asunto = 'Activar Cuenta - Sistema de Usuarios';
		$cuerpo = "Estimado $nombre: <br /><br />Para continuar con el proceso de registro, es indispensable dar click
		en la siguiente liga <a href='$url'>Activar Cuenta</a>";

		if(enviarEmail($email, $nombre, $asunto, $cuerpo)){

			echo "Para terminar el proceso de registro siga las instrucciones que le hemos enviado
			a la direccion de correo electronico: $email";

			echo "<br><a href='index2.php' >Iniciar Sesion</a>"; //modificar si cambio la pagina de inicio
			exit;

		} else {
			$errors[] = "error al enviar Email";
		}


	} else{

		$errors[] = "Error al registrar";
	}


	} else {
		$errors[] = "Error al comprobar Captcha";
	}

	}
//hasta Aqui va el código PHP	
}
	
	
?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registro</title>
		
		
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
		
		
	</head>

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
	
	<body>
		<div class="container">
			<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="panel-title">Reg&iacute;strate</div>
						<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="index2.php">Iniciar Sesi&oacute;n</a></div>
					</div>  
					
					
					<div class="panel-body" >
						
						<form id="signupform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							
							<div id="signupalert" style="display:none" class="alert alert-danger">
								<p>Error:</p>
								<span></span>
							</div>
							
							<div class="form-group">
								<label for="nombre" class="col-md-3 control-label">Nombre:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php if(isset($nombre)) echo $nombre; ?>" required >
								</div>
							</div>
							
							<div class="form-group">
								<label for="usuario" class="col-md-3 control-label">Usuario</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php if(isset($usuario)) echo $usuario; ?>" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="password" class="col-md-3 control-label">Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="password" placeholder="Password" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="con_password" class="col-md-3 control-label">Confirmar Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="con_password" placeholder="Confirmar Password" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="email" class="col-md-3 control-label">Email</label>
								<div class="col-md-9">
									<input type="email" class="form-control" name="email" placeholder="Email" value="<?php if(isset($email)) echo $email; ?>" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="captcha" class="col-md-3 control-label"></label>
								
								

								<div class="g-recaptcha col-md-9" data-sitekey="6LcYhGIeAAAAAMcID0tkRssyScfp628EqfPxqcIc"></div>
							
							</div>
							
							<div class="form-group">                                      
								<div class="col-md-offset-3 col-md-9">
									<button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Registrar</button> 
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