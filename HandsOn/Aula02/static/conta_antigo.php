<?php

abstract class Conta
{
	protected $saldo;
	protected $titular;
	
	public function __construct($titular, $saldo) {
		$this->titular = $titular;
		$this->saldo = $saldo;
		echo "Bem vindo $titular, seu saldo atual é: $saldo<br>";
	}
	
	abstract public function depositar($valor);
	
	public function sacar($valor) {
		if($valor > $this->saldo) {
			echo "Saldo insuficiente<br>";
			echo "Saldo atual: {$this->saldo}<br>";
		} else {
			echo "Saldo: {$this->saldo}<br>";
			$this->saldo -= $valor;
			echo "Sacado: $valor<br>";
			echo "Saldo atual: {$this->saldo}<br>";
		}
	}
	
	final public function verSaldo() {
		return $this->saldo;
	}
	
}

final class ContaCorrente extends Conta
{
	public function depositar($valor) {
		$this->saldo += $valor;
	}
}

final class ContaPoupanca extends Conta
{
	
	const JUROS= 1.15;
	
	public function depositar($valor) {
		echo "Saldo: {$this->saldo}<br>";
		$this->saldo += (self::JUROS*$valor);
		echo "Depositado: $valor<br>";
		echo "Saldo atual: {$this->saldo}<br>";
	}
	
}

$joao = new ContaCorrente('João Gabriel Hümmel', 10);
$joao->depositar(90);
$joao->sacar(100);

$poup = new ContaPoupanca('João Gabriel Hümmel', 0);
$poup->depositar(100);



