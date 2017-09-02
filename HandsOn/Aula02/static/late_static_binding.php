<?php

class Pai
{
	protected static $nome = 'Classe Pai';
	
	public static function pegaNome()
	{
		return static::$nome;
	}
}

class Filha extends Pai
{
	protected static $nome = 'Classe filha';
}

class Teste extends Pai
{
}

echo Pai::pegaNome().'<br>';
echo Filha::pegaNome().'<br>';
echo Teste::pegaNome().'<br>';<?php

class Pai
{
	protected static $nome = 'Classe Pai';
	
	public static function pegaNome()
	{
		return static::$nome;
	}
}

class Filha extends Pai
{
	protected static $nome = 'Classe filha';
}

class Teste extends Pai
{
}

echo Pai::pegaNome().'<br>';
echo Filha::pegaNome().'<br>';
echo Teste::pegaNome().'<br>';