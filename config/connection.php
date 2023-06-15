<?php 

//Conexão Com o Banco

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "agenda";


try {

	$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

	//Ativar modo de erro
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
} catch (PDOException $e) {
	//Erro na conexão
	$error = $e->getMessage();
	echo "Erro: $error";
}




 ?>