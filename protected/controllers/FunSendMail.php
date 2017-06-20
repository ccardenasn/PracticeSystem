<?php

function sendPassword($destino,$asunto,$rut,$nombre,$clave){
    include("phpmailer/class.phpmailer.php");
    include("phpmailer/class.smtp.php");
    
    $html="<html><meta http-equiv='Content-type' content='text/html;charset=UTF-8'></meta><body><p>Esto es un email enviado de forma automatica. Por favor no responder. Gracias</p>
        <p><b>Se ha creado su usuario</b></p>
        <p><b></b></p>
        <table width='100%' border='1' cellpadding='0' cellspacing='0'>
		<tr>
			<th>Rut</th>
			<th>Nombre</th>
			<th>Clave</th>
		</tr>
			<tr>
				<td align='center'>".$rut."</td>
				<td align='center'>".$nombre."</td>
				<td align='center'>".$clave."</td>
			</tr>
		</table>
</body>
</html>";

$query = $html;
	
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465;
	$mail->Username = "cardenasn.desarrollo@gmail.com";
	$mail->Password = "Prueba201";
	
	$mail->From = "cardenasn.desarrollo@gmail.com";
	$mail->FromName = "Escuela de Pedagogía en Educación Básica";
	$mail->Subject = $asunto;
	$mail->MsgHTML($query);
	$mail->AddAddress($destino,$nombre);
	$mail->IsHTML(true);
    $mail->CharSet = "UTF-8";
	if(!$mail->Send()){
		echo "Error:".$mail->ErrorInfo;
	}else{
		echo "Mensaje Enviado Correctamente</br>";	
	}
}



?>