<?php

function sendPassword($destino,$asunto,$rut,$nombre,$clave){
    //date_default_timezone_set('America/Santiago');
    
    //metodo para enviar mail desde servidor
    /*$html="<html><body><p>Esto es un email enviado de forma automatica. Por favor no responder. Gracias</p><p><b>Se ha creado su usuario</b></p><p><b></b></p><table width='100%' border='1' cellpadding='0' cellspacing='0'><tr><th>Rut</th><th>Nombre</th><th>Clave</th></tr><tr><td align='center'>".$rut."</td><td align='center'>".$nombre."</td><td align='center'>".$clave."</td></tr></table></body></html>";
    
    $para = $destino;
    $titulo = $asunto;
    $mensaje = wordwrap($html, 70, "\r\n");
    
    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras = "MIME-Version: 1.0" . "\r\n";
    $cabeceras .= "Content-type: text/html; charset=UTF-8"."\r\n";
    
    //Cabeceras adicionales
    $cabeceras .= "To: ".$nombre." <".$destino.">"."\r\n";
    $cabeceras .= "From: Pedagogía en Educación Básica"."\r\n";
    
    mail($para, $titulo, $mensaje, $cabeceras);*/
    

    //metodo para enviar mail desde localhost
    Yii::import('application.extensions.phpmailer.JPhpMailer');
    
    $html="<html><body><p>Esto es un email enviado de forma automatica. Por favor no responder. Gracias</p><p><b>Se ha creado su usuario</b></p><p><b></b></p><table width='100%' border='1' cellpadding='0' cellspacing='0'><tr><th>Rut</th><th>Nombre</th><th>Clave</th></tr><tr><td align='center'>".$rut."</td><td align='center'>".$nombre."</td><td align='center'>".$clave."</td></tr></table></body></html>";
    
    $mail = new JPhpMailer;
    $mail->IsSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = "ssl";
    $mail->SMTPAuth = true;
    $mail->Username = "cardenasn.desarrollo@gmail.com";
    $mail->Password = "Prueba201";
    $mail->Port = 465;
    $mail->SetFrom("cardenasn.desarrollo@gmail.com", 'Christian');
    $mail->Subject = $asunto;
    $mail->MsgHTML($html);
    $mail->AddAddress($destino,$nombre);
    $mail->Send();
}



?>