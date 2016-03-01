<?php
//Correo de destino; donde se enviará el correo.
$correoDestino = "orbit01@gmail.com";
//Formateo el asunto del correo
$asunto = "Orbit WEB $nombre";

//Texto emisor; sólo lo leerá quien reciba el contenido.
$textoEmisor = "MIME-VERSION: 1.0\r\n";
$textoEmisor .= "Content-type: text/html; charset=UTF-8\r\n";

 //NAME
if (empty($_POST["name"])) {
    $errorMSG = "Tu nombre es obligatorio...";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Tu e-mail es obligatorio...";
} else {
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Tu mensaje es obligatorio...";
} else {
    $message = $_POST["message"];
}

//Formateo el cuerpo del correo

$cuerpo = "<b>Enviado por:</b> " . $name ."<br />";
$cuerpo .= "<b>E-mail:</b> " . $email . "<br />";
$cuerpo .= "<b>Comentario:</b> " . $message;

// Envío el mensaje
$success = mail( $correoDestino, $asunto, $cuerpo, $textoEmisor);

//redirect to success page
if ($success && $errorMSG == ""){
   echo "Mensaje enviado";
}else{
    if($errorMSG == ""){
        echo "Algo esta mal :(";
    } else {
        echo $errorMSG;
    }
}

?>