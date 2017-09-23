<?php 

namespace Controller\BannersController;

include 'Controller/BaseController/BaseController.php';
use Controller\BaseController\BaseController as BaseController;


include 'Model/Banners/Banner.php';
use Model\Banners\Banner as Banner;

class BannersController
{
	private $pdo;
	private $baseController;
	
	function __construct()
	{
		$this->pdo = BaseController::pdo();
	}

	public function all()
	{

		$prepare = $this->pdo->query('SELECT * FROM banners ORDER BY id');
		$prepare->execute();

		$result = $prepare->fetchAll(\PDO::FETCH_ASSOC);

		$banners = [];
		foreach ($result as $key => $item) 
		{
			$banners[$key] = new Banner($item['id'],$item['nome'],$item['descricao'],$item['url']);
	
		}

		return $banners;
	}

	public function store($nome, $descricao, $url)
	{
	
		$query = 'INSERT INTO banners (nome, descricao, url) VALUES (:nome, :descricao, :url)';

		$campos = array(
			':nome' 		=> $nome, 
			':descricao' 	=> $descricao, 
			':url' 			=> $url,
		);

		$insert = $this->pdo->prepare($query);

		$insert->execute($campos);

		return true;

	}

	public function create()
	{
		include 'View/Banner/new.php';
	}

	public function update($id, $nome, $descricao, $url)
	{
		$query = 'UPDATE banners SET nome = :nome, descricao = :descricao, url = :url where id = :id';

		$campos = array(
			':nome' 		=> $nome, 
			':descricao' 	=> $descricao, 
			':url' 			=> $url,
			':id' 			=> $id,
		);

		$statement = $this->pdo->prepare($query);

		$statement->execute($campos);

		return true;
	}

	public function edit($id)
	{
		$query = 'SELECT * FROM banners where id = :id';

		$campos = [$id];

		$statement = $this->pdo->prepare($query);

		$statement->execute($campos);

		$result = $statement->fetch(\PDO::FETCH_ASSOC);


		$banner = new Banner($result['id'],$result['nome'],$result['descricao'],$result['url']);

		include 'View/Banner/edit.php';
	}

	public function delete($id)
	{
		$query = 'DELETE FROM banners where id = :id';

		$campos = [$id];

		$statement = $this->pdo->prepare($query);

		$statement->execute($campos);

		return true;
	}


}