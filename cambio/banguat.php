<!DOCTYPE html>
<html>
<head>
	<title>Cliente Para Webservice4 ejercicio</title>
	<meta charset="UTF-8">

</head>
	<body>
		<?php

			//esta libreria se puede descargar de http://sourceforge.net/projects/nusoap/
		//	include("nusoap/lib/nusoap.php");



  // parametros a pasar al metodo
	//	$url = "https://www.banguat.gob.gt/variables/ws/TipoCambio.asmx?WSDL";
	//	    $client = new nusoap_client('https://www.banguat.gob.gt/variables/ws/TipoCambio.asmx?WSDL');
			//$client = new \SoapClient("https://demo.l1nda.nl/api/webservice/?wsdl", ["trace" => 1,"exceptions" => true,]);
			$client = new soapclient("http://www.banguat.gob.gt/variables/ws/TipoCambio.asmx?wsdl", ["trace" => 1,"exceptions" => true,]);
			//var_dump($client->__getFunctions());


			//var_dump($client->call('TipoCambioDia'));
			var_dump($client->TipoCambioDiaString());



		//	echo "el cambio actual es: ".$valorCambio." Dolares";
		?>
	</body>
</html>
