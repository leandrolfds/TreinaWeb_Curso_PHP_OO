<?php
/**
 * Created by PhpStorm.
 * User: leand
 * Date: 13/08/2016
 * Time: 14:21
 */
class Pessoa{
    public $Codigo;
    public $Nome;
    public $Altura;
    public $AnoNascimento;
    public $Salario;

    /* Método Crescer
    Aumenta a estatura em centimentos
    */
    function Crescer($centimetros){
        if($centimetros > 0){
            $this->Altura+=$centimetros;
        }
    }

    /*Método AumentaSalário()
    *Aumenta Salário da pessoa em reais*
     */

    function AumentaSalario($reais){
        if($reais>0){
            $this->Salario+=$reais;
        }
    }

    /*Método ObterIdade()
    Retorna a Idade Atual
     */
    function ObterIdade(){
        $ano_atual = date("Y",time());
        return $ano_atual - $this->AnoNascimento;
    }
}
?>