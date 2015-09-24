
<?php
$nombre = $_POST['name'] ;
$remitente = $_POST['mail'] ;
$asunto = $_POST['asunto'] ;
$lenguaje = $_POST['lan'];
$nivel = $_POST['level'];
$mensaje = $_POST['msj'];


extract($_POST);

//set POST variables
$url = 'https://api.mailgun.net/v3/sandboxc9c4b7ab94f84710adb8e847cff7ac43.mailgun.org/messages';
$fields = array(
					'from'		=> urlencode($name.' / '.$remitente),
    	 			'to' 		=> urlencode('octavio.razo.verduzco@gmail.com' ),
   		 			'subject'	=> urlencode($asunto),
    	 			'text'		=> urlencode('Lenguaje :' .$lenguaje."\nNivel : ".$nivel. "\n Desarrollo:" . $mensaje )
				);

//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_USERPWD,'api:key-d43fcd11e3fa56d5ccc0d8f4e241aff4' );
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);

header('Location: index.html');

//close connection
curl_close($ch);

?>

