<?php 

	class Conta
	{
		private $titular = 'Lucas';

		public function __set($name, $value)
		{
			echo "Setando {$name}<br>";
			$this->$name = $value;
		}

		public function __get($name)
		{
			echo "Pegando {$name}<br>";
			return $this->$name;
		}

		public function __isset($name)
		{
			echo "Está setada? {$name}<br>";
			return isset($this->$name);
		}

		public function __unset($name)
		{
			echo "Apagando {$name}<br>";
			unset($this->$name);
		}
	}

	echo '<pre>';

	$conta = new Conta();

	$conta->saldo = 10;

	echo $conta->titular . "<br>";

	var_dump(isset($conta->agencia));
	unset($conta->agencia);



	echo '</pre>';