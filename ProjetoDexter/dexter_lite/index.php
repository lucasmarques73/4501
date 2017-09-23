<?php 

include 'autoload.php';

// Criando um objeto BannersController
use Controller\BannersController\BannersController;

$bannersController = new BannersController;
/// -------------------------------------------

# Routes;	
if (!isset($_GET['route'])) {
	$_GET['route'] = 'home';
}

include 'header.php';

switch ($_GET['route']) {

	case 'home':

		include 'View/Home.php';

		break;

	case 'banner':

		$banners = $bannersController->all();

		include 'View/Banner/index.php';

		break;

	case 'new_banner':

		include 'View/Banner/new.php';

		$data = $_POST;

		if (isset($data['create'])) {			

			$isCreate = $bannersController->store($nome, $descricao, $url);

			if ($isCreate) {
				header('Location: ?route=banner');
			}
		}		

		break;

	case 'edit_banner':

		$banner = $bannersController->edit($_GET['id']);

		include 'View/Banner/edit.php';

		$data = $_POST;

		if (isset($data['update'])) {

			$isUpdate = $bannersController->update($data);	
			
			if ($isUpdate) {
				header('Location: ?route=banner');
			}			
		}		

		break;

	case 'delete_banner':

		$isDelete = $bannersController->delete($_GET['id']);

		if ($isDelete) {
			header('Location: ?route=banner');
		}
		
		break;

	case 'clientes':
		include 'View/Clientes.php';
		break;

	case 'fale_conosco':
		include 'View/Fale_conosco.php';
		break;

	case 'funcionalidades':
		include 'View/Funcionalidades.php';
		break;

	case 'funcionarios':
		include 'View/Funcionarios.php';
		break;

	case 'servicos':
		include 'View/Servicos.php';
		break;

	default:
		include 'View/404.php';
		break;
}

include 'footer.php';