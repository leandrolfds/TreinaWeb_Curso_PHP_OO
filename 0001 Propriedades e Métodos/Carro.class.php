<?php

/*  Propriedades = Modelo,  Cilindradas, Número de Postas, Ano e Etc. */

class Carro{
	public $Modelo;       //   <--- Propridade Modelo
	public $Cilindradas; //    <--- Propridade Cilindradas
	public $Portas; //         <--- Propridade Postas
	public $Cor;//             <--- Propridade Cor
	public $Ano; //            <--- Propridade Ano

    /* Métodos = Buzinar, Acelerar, frear e etc.*/

    function VerCarros(){ // <--- Método Ver Carros
		echo "<h2>". $this->Modelo ."</h2>"; // <-- O pseudo-variável $this diferencia as propriedades  do objeto de variaveis locais
		echo "<p> <b>Portas: </b>" .$this->Portas ."</p>";
		echo "<p> <b>Cor: </b>" .$this->Cor ."</p>";	
	
	}
}
?>