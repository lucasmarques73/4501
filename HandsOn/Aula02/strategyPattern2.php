<?php 
	
	interface FreteStrategy
	{
		public function calcular();
	}

	class FreteNormal implements FreteStrategy
	{
		public function calcular()
		{
			echo "Frete Normal!<br>";
			return 2 ;
		}
	}

	class FreteExpresso implements FreteStrategy
	{
		public function calcular()
		{
			echo "Frete Expresso!<br>";
			return 5 ;
		}
	}

	class FreteTurbo implements FreteStrategy
	{
		public function calcular()
		{
			echo "Frete Turbo!<br>";
			return 10 ;
		}
	}

	class Pedido 
	{
		private $freteStrategy;
		private $km;

		function __construct(FreteStrategy $freteStrategy,$km)
		{
			$this->freteStrategy = $freteStrategy;
			$this->km = $km;
		}

		public function calcularTotalPedido()
		{
			$totalPedido = 0;

			$totalPedido = $this->freteStrategy->calcular() * $this->km;

			return $totalPedido;
		}
	}

	$tipo_frete = 1;

	if($tipo_frete === 1)
	{
		$freteStrategy = new FreteNormal();
	}

	elseif($tipo_frete === 2)
	{
		$freteStrategy = new FreteExpresso();
	}

	elseif($tipo_frete === 3)
	{
		$freteStrategy = new FreteTurbo();
	}

	$pedido = new Pedido($freteStrategy, 10);

	echo "Total Pedido: R$ {$pedido->calcularTotalPedido()}";