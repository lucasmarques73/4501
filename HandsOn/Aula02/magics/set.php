<?php 

	class Conta
	{
		public function __set($name, $value)
		{
			$this->$name = $value;
		}
	}

	$conta = new Conta();
	$conta->saldo = 100;
	echo "Saldo: {$conta->saldo}";