<?php 

namespace Controller\BaseController;

include 'Src/Conexao/Conexao.php';

use Src\Conexao\Conexao as Conexao;

class BaseController
{
	public static function pdo()
	{
		return Conexao::getInstance();
	}

	
}