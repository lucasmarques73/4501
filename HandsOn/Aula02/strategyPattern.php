<?php 
	
	interface FreteStrategy
	{
		public function calcular($km);
	}

	class FreteNormal implements FreteStrategy
	{
		public function calcular($km)
		{
			echo "Frete Normal!<br>";
			return 2 * $km; 
		}
	}

	class FreteExpresso implements FreteStrategy
	{
		public function calcular($km)
		{
			echo "Frete Expresso!<br>";
			return 5 * $km; 
		}
	}

	class FreteTurbo implements FreteStrategy
	{
		public function calcular($km)
		{
			echo "Frete Turbo!<br>";
			return 10 * $km ;
		}
	}

	class Pedido 
	{
		private $freteStrategy;

		function __construct(FreteStrategy $freteStrategy)
		{
			$this->freteStrategy = $freteStrategy;
		}

		public function calcularTotalPedido($km)
		{
			$totalPedido = 0;

			$totalPedido = $this->freteStrategy->calcular($km);

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

	$pedido = new Pedido($freteStrategy);

	echo "Total Pedido: R$ {$pedido->calcularTotalPedido(50)}";