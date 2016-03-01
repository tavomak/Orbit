<?php

$errorMSG = "Error en mensaje";
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
$headers .= 'Content-Type: text/plain; charset=UTF-8' . "\r\n";

 NAME
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


$EmailTo = "estela1estudio@gmail.com";
$Subject = "Mensaje Orbit Web";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

 redirect to success page
if ($success && $errorMSG == ""){
   echo "mensaje enviado";
}else{
    if($errorMSG == ""){
        echo "Algo esta mal :(";
    } else {
        echo $errorMSG;
    }
}

?>