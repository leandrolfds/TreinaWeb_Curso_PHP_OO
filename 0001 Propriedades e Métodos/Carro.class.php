<?php
class Carro{
	public $Modelo;
	public $Cilindradas;
	public $Portas;
	public $Cor;
	public $Ano;		
		
	function VerCarros(){
		
		echo "<h2>". $this->Modelo ."</h2>";
		echo "<p> <b>Portas: </b>" .$this->Portas ."</p>";
		echo "<p> <b>Cor: </b>" .$this->Cor ."</p>";	
	
	}
}
?>