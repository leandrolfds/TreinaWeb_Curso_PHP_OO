<?php
/**
 * Created by PhpStorm.
 * User: Leandro
 * Date: 15/08/2016
 * Time: 14:24
 */

class Pessoa{
    public $Codigo;
    public $Nome;
    public $Altura
    public $AnoNascimento;
    public $Salario;

    /*Método Construtor
    *Inicializa as Propriedades
    */

    function __construct($Codigo,$Nome,$Altura,$AnoNascimento,$Salario=0){ //Construtor
        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
        $this->Altura = $Altura;
        $this->AnoNascimento = $AnoNascimento;
        $this->Salario = $Salario;
    }

    /*Método Destrutor
    *Finaliza os objetos
    */

    function __destruct(){
        echo "<small>O Objeto Sálario{$this->Salario} foi destruido</small><br />";
    }

    /* Método Crescer()
    *Aumenta a estatura em centímetro
    */

    function Crescer($centimetros){
        if ($centimetros > 0){
            $this->Altura += $centimetros;
        }
    }

    /* Método AumentarSalario()
    * Aumenta o salário da pessoa em reais
    */

    function AumentarSalario($reais){
        if($reais > 0) {
            $this->Salario += $reais;
        }
    }

    /*Método ObterIdade()
    *Retorna Idade
    */

    function ObterIdade(){
        $ano_atual = date("Y", time());
        return $ano_atual - $this->AnoNascimento;
    }

}