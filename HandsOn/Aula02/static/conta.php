<?php


	abstract class Conta 
	{
		// variaveis protected so o pai e o filho podem acessar
		protected $saldo;
		protected $titular;

		// funcao construction pode ser chamada a qualquer momento
		public function __construct($titular,$saldoInicial)
		{
			$this->titular = $titular;
			$this->saldo = $saldoInicial;

		}

		abstract public function depositar($valor);

		public function sacar($valor)
		{
			$this->saldo -= $valor;
			echo "<p> sacado o valor de R$ {$valor} reais</p>";
		}

		final public function verSaldo()
		{
			echo "<p>saldo atual de R$ {$this->saldo} reais</p>";
		}

	}

	final class ContaCorrente extends Conta 
	{
		public function depositar($valor)
		{
			$this->saldo += $valor;
			echo "<p>depositando o valor de R$ {$valor} reais</p>";
		}

	}

     class ContaPoupanca extends Conta 
	{

		private static $juros = 1.15;

		public function depositar($valor)
		{
			echo "Saldo: {$this->saldo}<br>";
			$this->saldo +=( self::$juros * $valor);
			echo "Depositado: $valor <br>";
			echo "Saldo Atual: {$this->saldo}";

			// $this->saldo += $valor + ($valor * 0.1);
			// echo  "<p>depositando o valor de R$ {$valor} reais</p>";
		}
	}

echo "<p>Conta Corrente:</p>";
$ContaCorrente = new ContaCorrente('4linux',0);
$ContaCorrente->depositar(50);
$ContaCorrente->sacar(15);
$ContaCorrente->verSaldo();

echo"<hr />";

echo "<p>Conta ContaPoupanca:</p>";
$ContaPoupanca = new ContaPoupanca('4linux',0);
$ContaPoupanca->depositar(50);
$ContaPoupanca->sacar(40);
$ContaPoupanca->verSaldo();

?>