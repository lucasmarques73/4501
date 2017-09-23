<?php 

namespace Repository\BaseRepository;

use Src\Conexao\Conexao;

class BaseRepository 
{
	private $pdo;
	
	function __construct()
	{
		$this->pdo = Conexao::getInstance();
	}

	public function getPdo()
	{
		return $this->pdo;
	}

}