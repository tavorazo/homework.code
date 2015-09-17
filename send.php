
<?php
$remitente = $_POST['mail'] ;
$nombre = $_POST['name'] ;
$asunto = $_POST['asunto'] ;
$lenguaje = $_POST['lan'];
$nivel = $_POST['level'];
$mensaje = $_POST['mail'];


$mensaje = "Mensaje de:". $nombre. "<br><br>". $lenguaje. " ".$nivel."<br><br>". $mensaje;
	$encabezados = 'MIME-Version: 1.0' . "\r\n";
	$encabezados .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$encabezados .= "From: $remitente\nReply-To: $remitente" ;
//for($i=0; $i<3; $i++)
	
	mail("octavio.razo.verduzco@gmail.com", $asunto, $mensaje, $encabezados) or die ("No se ha podido enviar tu mensaje. Ha ocurrido un error") ;
	
//echo "<p>Tu mensaje a sido enviado con este contenido:</p>" ;
//echo "<strong><b>$mensaje</b></strong>" ;
	header('Location: homeworkcode.herokuapp.com');

  //<meta http-equiv="Refresh" content="0;url=http://wbx.technology/old/">

?>

