<?php 

namespace Src\Conexao;

class Conexao
{
	private $dsn 	= 'pgsql:host=localhost; dbname=dexter';
	private $user 	= 'dexter';
	private $pass 	= 'dexter@secret';

	private  static $instance;


	private function __contruct($dsn, $user, $pass)
	{
		// try 
		// {
		// 	$pdo = new PDO($dsn, $user, $pass);

		// 	if (!$pdo) 
		// 	{
		// 		echo "Não foi possível conectar ao banco!";
		// 	}
			
		// } 
		// catch (Exception $e) 
		// {
		// 	echo "Erro: " . $e->getMessage();
			
		// }
		
	}

	public static function getInstance()
	{
		$dsn = 'pgsql:host=localhost; dbname=dexter';
		$user = 'dexter';
		$pass = 'dexter@secret';

		if (!isset(self::$instance)) 
		{
			self::$instance = new \PDO($dsn, $user, $pass);
		}

		return self::$instance;

	}

	
	
}

	