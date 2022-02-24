<?php 

$nombre= $_POST["nombre"];
$email= $_POST["email"];
$telefono= $_POST["telefono"];


$mensaje_completo="Nombre: ".$nombre."<br>"."Email: ".$email."<br>"."Telefono: ".$telefono."<br>";

echo $nombre. " ha enviado el siguiente mensaje <br><br>". $mensaje."</b>";

if(mail("cschmittl_z849o@xeoty.com", "PRESUPUESTO", $mensaje_completo)){
    
    echo "<br><br> Mensaje enviado con éxito";
}else{
    echo "<br><br> Hay un error al enviar el mensaje";
}