<?php

$data = array(
	'nom'	=> 'Arnoult',
	'prenom'=> 'Geoffrey',
	'id' => '1'
	)


$options = array(
	'http' => array(
		'method' => 'POST',
		'content' => json_encode( $data ),
		'header' => "Content-Type: application/json\r\n" .
					"Accept: application/json\r\n"
		)
	);

$context = stream_context_create( $options );
$result = file_get_contents( $url, false, $context );
$response = json_decode( $result );

?>