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

	public function store($data)
	{
		return $this->bannersRepository->store($data);
	}

	public function update($data)
	{
		return $this->bannersRepository->update($data);
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