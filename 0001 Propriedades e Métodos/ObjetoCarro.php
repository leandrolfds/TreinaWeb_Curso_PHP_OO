<?php
	require_once("Carro.class.php");	
	/* $carro = new Carro();
	
	$carro->Modelo = "Peugeot 307";
	$carro->Cilindradas = 1600;
	$carro->Portas = 4;
	$carro->Cor = "Preto";
	$carro->Ano = 2010;
	
	echo "<h1>". $carro->Modelo."</h1>"; */
	
	$carro1 = new Carro();
	
	$carro1->Modelo = "Peugeot 307";
	$carro1->Cor = "Preto";
	$carro1->Portas = 2;
	
	
	$carro2 = new Carro();
	
	$carro2->Modelo = "CrossFox";
	$carro2->Cor = "Amarelo";
	$carro2->Portas = 4;
	
	echo $carro1->VerCarros();
	
	echo $carro2->VerCarros();	
?>