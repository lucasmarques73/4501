<?php 

	class Conta
	{
		private $saldo = 0;

		public function __get($name)
		{
			return $this->$name;
		}
	}

	$conta = new Conta();
	echo "Saldo: {$conta->saldo}";