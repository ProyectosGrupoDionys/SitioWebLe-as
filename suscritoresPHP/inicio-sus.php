<?php  
	$destino= "soporteti@grupodionys.com.pe";
	$registrate=$_POST["registrate"];
	$contenido = "Registrate: " . $registrate;

	mail($destino, "Suscriptores de la Pagina Web", $contenido);
	header("Location:../index.html");
 ?>
