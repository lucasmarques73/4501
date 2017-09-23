<?php 

use Controller\BannersController\BannersController;

$bannersController = new BannersController;

switch ($_GET['function']) {

	case 'index':

		$banners = $bannersController->all();

		$baseView->render('Banners', 'index', 'banners', $banners);

		break;

	case 'new':

		$baseView->render('Banners', 'new');

		$data = $_POST;

		if (isset($data['create'])) {			

			$isCreate = $bannersController->store($data);

			if ($isCreate) {
				header('Location: ?route=banner&function=index');
			}
		}		

		break;

	case 'edit':

		$banner = $bannersController->edit($_GET['id']);
		$baseView->render('Banners', 'edit', 'banner', $banner);

		$data = $_POST;

		if (isset($data['update'])) {

			$isUpdate = $bannersController->update($data);	
			
			if ($isUpdate) {
				header('Location: ?route=banner&function=index');
			}			
		}		

		break;

	case 'delete':

		$isDelete = $bannersController->delete($_GET['id']);

		if ($isDelete) {
			header('Location: ?route=banner&function=index');
		}
		
		break;
	
	default:
		# code...
		break;
}

