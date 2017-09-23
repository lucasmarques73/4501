<?php 

namespace Controller\BannersController;

use Repository\BannersRepository\BannersRepository;

class BannersController
{
	private $banners;
	private $bannersRepository;
	
	function __construct()
	{
		$this->bannersRepository = new BannersRepository;
	}

	public function all()
	{
		return $this->bannersRepository->all();
	}

	public function store($nome, $descricao, $url)
	{
		return $this->bannersRepository->store($nome,$descricao, $url);
	}

	// public function create()
	// {
	// 	include 'View/Banner/new.php';
	// }

	public function update($id, $nome, $descricao, $url)
	{
		return $this->bannersRepository->update($id, $nome, $descricao, $url);
	}

	public function edit($id)
	{
		return $this->bannersRepository->edit($id);
	}

	public function delete($id)
	{
		return $this->bannersRepository->delete($id);
	}


}