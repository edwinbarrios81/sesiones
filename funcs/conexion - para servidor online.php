<?php
	
	$mysqli=new mysqli("localhost:3306",
	"milocalo_milocalonline",
	"(htI7zMmVZHi",
	"milocalo_login"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>