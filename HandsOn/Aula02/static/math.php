<?php 

class Math 
{
	public static function soma($a,$b)
	{
		return $a + $b;
	}

	public static function subtracao($a,$b)
	{
		return $a - $b;
	}

	public static function multiplicacao($a,$b)
	{
		return $a * $b;
	}

	public static function divisao($a,$b)
	{
		return $a / $b;
	}
}

// Métodos static, assim não preciso instânciar a classe para utilizar as funções.

echo Math::soma(3,2);
echo "<br>";
echo Math::subtracao(3,2);
echo "<br>";
echo Math::multiplicacao(3,2);
echo "<br>";
echo Math::divisao(3,2);
echo "<br>";
