<?php
require "request/library/Requests.php";
Requests::register_autoloader();
require "culqi/lib/culqi.php";

$SECRET_KEY = "sk_live_JrMdVsdScLyRshJi";

$culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));

$culqi->Charges->create(
	array(
		"amount" => $_POST['precio'],
		"capture" => true,
		"currency_code" => $_POST['valor'],
		"description" => $_POST['producto'],
		"email" => $_POST['email'],
		"installments" => 0,
		"source_id" => $_POST['token']
	)
);
echo 'Gracias por comprar en AndenPeruTour.com';

exit;