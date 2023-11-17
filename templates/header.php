<?php 


include_once("config/url.php");
include_once("config/process.php");

//Limpa a mensagem

if (isset($_SESSION['msg'])) {
	$printMsg = $_SESSION['msg'];
	$_SESSION['msg'] = '';
}


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agenda De Contatos</title>

	<!--Botstrap-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

	<!--Font Awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!--CSS-->
	<link rel="stylesheet"  href="<?= $BASE_URL ?>css/styles.css">

</head>
<body>

	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

			<a class="navbar-brand" href="/index.php">
				<img alt="Agenda" src="/img/logo.svg">
			</a>

			<div>
				<div class="navbar-nav">
					<a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
					<a class="nav-link active"  href="/create.php">Adicionar Contato</a>
					
				</div>
			</div>

		</nav>
	</header>
