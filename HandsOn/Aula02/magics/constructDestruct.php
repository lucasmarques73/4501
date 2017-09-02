<?php

	class Conta
	{
		private $saldo = 0;

		public function __construct($saldoInicial)
		{
			$this->saldo = $saldoInicial;
		}

		public function __destruct()
		{
			echo "Destruindo a conta";
		}
	}

	$conta = new Conta(50);