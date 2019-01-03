<?php
include_once('http.php');
$request = new HttpRequest();
$request->setUrl('http://eguruskindev.api.tatamotors/api/common/get/otp/');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'Postman-Token' => 'd771045d-ef34-4d70-a28b-97170b87b197',
  'cache-control' => 'no-cache',
  'Content-Type' => 'application/json'
));

$request->setBody('{
	"phone_number": "8855021144",
	"app_name": "com.tatamotors.epc",
	"email_id": "",
	"device_id": "nif8na9mon"
}');

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}
?>