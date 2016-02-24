<?php


//Correo de destino; donde se enviará el correo.
$correoDestino = "estela1estudio@gmail.com";

//Texto emisor; sólo lo leerá quien reciba el contenido.
$textoEmisor = "MIME-VERSION: 1.0\r\n";
$textoEmisor .= "Content-type: text/html; charset=UTF-8\r\n";

/*
	Recopilo los datos vía POST
	Con strip_tags suprimo etiquetas HTML y php para evitar una posible inyección.
	Como no gestiona base de datos no es necesario limpiar de inyección SQL.
*/
$nombre = strip_tags($_POST['name']);
$apellidos = strip_tags($_POST['surname']);
$pais = strip_tags($_POST['country']);;
$correo = strip_tags($_POST['mail']);
$comentario = strip_tags($_POST['comment']);
$fecha = time();
$fechaFormateada = date("j/n/Y", $fecha);

//Formateo el asunto del correo
$asunto = "Contacto WEB $nombre $apellidos; de $empresa";

//Formateo el cuerpo del correo

$cuerpo = "<b>Enviado por:</b> " . $nombre . ", " . $apellidos . " a las " . $fechaFormateada . "<br />";
$cuerpo .= "<b>E-mail:</b> " . $correo . "<br />";
$cuerpo .= "<b>Pais destino</b> " . $pais. "<br />";
$cuerpo .= "<b>Comentario:</b> " . $comentario;

// Envío el mensaje
mail( $correoDestino, $asunto, $cuerpo, $textoEmisor);
?>