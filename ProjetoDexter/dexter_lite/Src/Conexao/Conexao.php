<?php 

namespace Src\Conexao;

class Conexao
{
	// private static $dsn 		= 'pgsql:host=localhost; dbname=dexter';
	// private static $user 	= 'dexter';
	// private static $pass 	= 'dexter@secret';

	private static $dsn = 'pgsql:host=localhost; dbname=dexter';
	private static $user = 'usuario_dexter';
	private static $pass = '123456789';

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
		if (!isset(self::$instance)) 
		{
			self::$instance = new \PDO(self::$dsn, self::$user, self::$pass);
		}

		return self::$instance;

	}

	
	
}

	