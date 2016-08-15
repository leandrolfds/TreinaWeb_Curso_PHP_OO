<?php
/**
 * Created by PhpStorm.
 * User: Leandro
 * Date: 15/08/2016
 * Time: 14:39
 */

class Conta{
    public $Titulo;
    public $Agencia;
    public $CodigoAgencia;
    public $Conta;
    public $CodigoConta;
    public $DataDaCriacao;
    public $Saldo;
    public $Cancelada;

    /*
     * Método Construdor
     * Inicializa as propriedades
     */

    function __construct($Titular,$Agencia,$CodigoAgencia,$Conta,$CodigoConta,$DataCriacao,$Saldo,$Cancelada){

        $this->Titulo = $Titular;
        $this->Agencia = $Agencia;
        $this->CodigoAgencia = $CodigoAgencia;
        $this->Conta = $Conta;
        $this->CodigoConta = $CodigoConta;
        $this->DataDaCriacao = $DataCriacao;
        $this->Saldo = $Saldo;
        $this->Cancelada = $Cancelada;
    }

    /*
     * Método Destrutor
     * Finaliza os Objetos
     */

    function __destruct(){
        echo "<small> O Objeto Agência{$this->Agencia} foi destruído.</small><br />";
    }

    /*
     * Método Sacar()
     * Diminui saldo em quantia
     */

    function Sacar($quantia){
        if($quantia > 0){
            $this->Saldo -= $quantia;
        }
    }

    /*
     * Método Depositar();
     * Deposita em quantia, acrescenta o saldo
     */

    function Depositar($quantia){
        if($quantia ->  ){
            $this->Saldo += $quantia;
        }
    }

    /*
     * Método ObterSaldo()
     * Retorna o Saldo da Conta
     */

    function ObterSaldo(){
        return $this->Saldo;
    }
}
