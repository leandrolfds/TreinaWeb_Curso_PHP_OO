<?php
/**
 * Created by PhpStorm.
 * User: Leandro
 * Date: 15/08/2016
 * Time: 15:49
 */
require_once("Pessoa.class.php");
require_once("Conta.class.php");

//Criaçao do Objeto Leandro
$leandro = new Pessoa(10,"Leandro",1.90,1986,2.900);

//Criação do Objeto Leandro Conta

$conta_do_leandro = new Conta($leandro,1204,4,2257,5,"24/04/2010",850.00,false);

//Manipulando os Dados

echo "<strong>Conta de: </strong>".$leandro->Nome." - ".$leandro->ObterIdade()." Anos <br />";
echo "<strong>Saldo Disponível: </strong>".$conta_do_leandro->Saldo."<br /><br />";

$conta_do_leandro->Depositar(100);
echo "<strong>Depósito - Novo Saldo: </strong>".$conta_do_leandro->Saldo."<br /><br />";

$conta_do_leandro->Sacar(150);
echo "<strong>Saque - Novo Saldo: </strong>".$conta_do_leandro->Saldo."<br /><br />";

