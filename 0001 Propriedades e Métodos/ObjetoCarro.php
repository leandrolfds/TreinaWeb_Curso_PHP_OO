<?php
    // Insere a Classe Carro
	require_once("Carro.class.php");	

    // Instacia um novo objeto (
	$carro1 = new Carro();

    //Atribuindo valores
	$carro1->Modelo = "Peugeot 307";
	$carro1->Cor = "Preto";
	$carro1->Portas = 2;
	
	
	$carro2 = new Carro();
	
	$carro2->Modelo = "CrossFox";
	$carro2->Cor = "Amarelo";
	$carro2->Portas = 4;

    //Verifica os valores inseridos.
	echo $carro1->VerCarros();
	echo $carro2->VerCarros();	
?>