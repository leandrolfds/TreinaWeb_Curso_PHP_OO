<?php
/**
 * Created by PhpStorm.
 * User: leand
 * Date: 14/08/2016
 * Time: 10:48
 */

    require_once("Pessoa.class.php");
    require_once("Conta.class.php");

    // Criação do Objeto Leandro

    $leandro = new Pessoa();
    $leandro->Codigo = 5;
    $leandro->Nome = "Leandro Ferreira";
    $leandro->Altura = 1.90;
    $leandro->AnoNascimento = 1986;
    $leandro->Salario = 2500;

    //Criação do Objeto conta  do Leandro

    $conta_do_leandro = new Conta();
    $conta_do_leandro->Titular = $leandro;
    $conta_do_leandro->Agencia = 1204;
    $conta_do_leandro->CodigoAgencia = 4;
    $conta_do_leandro->Conta = 2228;
    $conta_do_leandro->CodigoConta = 4;
    $conta_do_leandro->Saldo = 950.50;
    $conta_do_leandro->Cancelado = false;


    //Manipulando os dados
    echo "<strong>Conta de: </strong>".$leandro->Nome." - ".$leandro->ObterIdade()." Anos <br />";
    echo "<strong>Saldo disponível: </strong>".$conta_do_leandro->Saldo."<br /> <br />";


    $conta_do_leandro->Depositar(100);
    echo "<strong>Depósito - Novo Saldo: </strong>".$conta_do_leandro->Saldo."<br /> <br />";

    $conta_do_leandro->Sacar(150);
    echo "<strong>Saque - Novo Saldo: </strong>".$conta_do_leandro->Saldo."<br /> <br />";


