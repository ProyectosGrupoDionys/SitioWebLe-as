<?php  
	$destino= "soporteti@grupodionys.com.pe";
	$nombre=$_POST["nombre"];
	$email=$_POST["email"];
	$telefono=$_POST["telefono"];
	$correo=$_POST["email"];
	$mensaje=$_POST["mensaje"];
	$contenido = "Nombre: " . $nombre .  "\nEmail: " . $email . "\nTelefono: " . $telefono . "\nCorreo: " . $correo ."\nMensaje: " . $mensaje;

	mail($destino, "Web Las Leñas", $contenido);
	header("Location:../servicio-piscinas.html");
 ?>
