<?php
/**
 * Created by PhpStorm.
 * User: leand
 * Date: 14/08/2016
 * Time: 10:28
 */

    class Conta{
        public $Titular;
        public $Agencia;
        public $CodigoAgencia;
        public $Conta;
        public $CodigoConta;
        public $DataDaCriação;
        public $Saldo;
        public $Cancelado;

        /* Metodo Sacar
        Diminui o saldo da quantia
        */

        function Sacar($quantia){
            if($quantia > 0){
                $this->Saldo -= $quantia;
            }
        }

        /*Metodo Depositar
        Deposita uma quantia, acrescenta o saldo.
        */

        function Depositar($quantia){
            if($quantia > 0){
                $this->Saldo+= $quantia;
            }
        }

        /* Metodo ObterSaldo
        Retorna o saldo atual
        */

        function ObterSaldo(){
            return $this->Saldo;
        }
   }