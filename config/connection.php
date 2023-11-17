<?php 

//Conexão Com o Banco

$host = "roundhouse.proxy.rlwy.net";
$user = "root";
$pass = "gfAE5G2CH13bGFEeh5Ba2CffDfGDacFH";
$dbname = "agenda";
$port = 52471;


try {

	$conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);

	//Ativar modo de erro
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
} catch (PDOException $e) {
	//Erro na conexão
	$error = $e->getMessage();
	echo "Erro: $error";
}




 ?>