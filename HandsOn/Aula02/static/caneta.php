<?php

/**
* 
*/
class Caneta
{
	private static $tamanho = 10;
	private static $cor;

	function __construct($cor)
	{
		self::$cor = $cor;
	}

	public function getColor()
	{
		return self::$cor;
	}
	public function setColor($cor)
	{
		self::$cor = $cor;
	}

	public function getTamanho()
	{
		return self::$tamanho;
	}
	public static function setTamanho($n)
	{
		self::$tamanho = $n;
	}
}

$canetaAzul 	= new Caneta('azul');
$canetaPreta 	= new Caneta('preta');

echo $canetaAzul->getColor();
echo "<br>";
echo $canetaAzul->getTamanho();
echo "<br>";
echo $canetaAzul->setTamanho(50);
echo "<br>";
echo $canetaAzul->setColor('rosa');
echo "<br>";

/*
 *	Ao alteramor o tamanho que é uma váriavel static,
 *	ele altera na classe e assim todas as instancias desta classe também são alteradas.
 *
 */

echo "<br>";
echo $canetaAzul->getTamanho();

echo "<hr>";

echo $canetaPreta->getColor();
echo "<br>";
echo $canetaPreta->getTamanho();
echo "<br>";
echo $canetaPreta->setTamanho(50);
echo "<br>";
echo $canetaPreta->getTamanho();

echo "<hr>";

Caneta::setTamanho(100);

echo $canetaPreta->getTamanho();
echo "<br>";
echo $canetaAzul->getTamanho();