
<?php


if(empty($_POST['checkbox-inicial']) ){
    $inicial = "";
}else {
    $inicial = $_POST['checkbox-inicial'];
}

if(empty($_POST['checkbox-primaria'])){
    $primaria="";
}else{
    $primaria = $_POST['checkbox-primaria'];
}

if(empty($_POST['checkbox-secundaria'])){
    $secundaria="";
}else{
    $secundaria = $_POST['checkbox-secundaria'];

}



$nombre_apoderado=$_POST['nombre-apoderado'];
$nombre_alumno=$_POST['nombre-alumno'];
$email=$_POST['email'];
$celular=$_POST['celular'];
$consulta = $_POST['consulta'];
$date= new DateTime();



$mensaje= "Mensaje Enviado con éxito";





use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';



// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.rosadeamerica.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'consultas@rosadeamerica.com';                     // SMTP username
    $mail->Password   = 'Rosadeamerica2020';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('consultas@rosadeamerica.com', 'Consultas');
    $mail->addAddress('iep.rosadeamerica.sr@gmail.com', 'Consultas');     // Add a recipient
 

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Consulta de Matricula';
    $mail->Body    = "---------- Recepción de Mensajes Rosa de América --------- <br><br>"."<b>Apoderado: </b>".$nombre_apoderado."<br><b>Alumno: </b>".$nombre_alumno." <br><b>Correo:  </b>".$email."<br><b>Celular: </b>".$celular."<br> <b>Fecha y Hora: </b>".$date->format('d-m-Y H:i:s'). "<br> <b>Grados a consultar: </b> ".$inicial.", ".$primaria.", ".$secundaria."<br> <br> <b>CONSULTA:  </b> <br> <br>" .$consulta;
    $mail->AltBody = "Muchas gracias por la información";

    $mail->send();
    //Aqui deberia ir echo("algun mensaje de envío correcto");
    //pero abajo creamos un html para realizar la vista, abrimos tags de php para 
    //llamar a la función $email->send(); y recien en el html colocamos el echo para 
    //visualizarlo dentro del html y no fuera
} catch (Exception $e) {
    echo "Hubo un error al enviar el correo: {$mail->ErrorInfo}";
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style-contact-nosotros.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="..assets/img/logo-ra.svg">
    <title>Envío de correo</title>
</head>
<body>
     

<div class="contact">


</div>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="../assets/js/sweetalert.js"></script>
</body>
</html>