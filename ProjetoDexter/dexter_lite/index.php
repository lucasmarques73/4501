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

		if (isset($_POST['create'])) {

				if (!isset($_POST['nome'])) {
					$_POST['nome'] = "";
				}
				if (!isset($_POST['descricao'])) {
					$_POST['descricao'] = "";
				}
				if (!isset($_POST['url'])) {
					$_POST['url'] = "";
				}

				$nome 		= $_POST['nome'];
				$descricao 	= $_POST['descricao'];
				$url 		= $_POST['url'];

				$isCreate = $bannersController->store($nome, $descricao, $url);

				if ($isCreate) {
					header('Location: ?route=banner');
				}
		}		

		break;

	case 'edit_banner':

		$banner = $bannersController->edit($_GET['id']);

		include 'View/Banner/edit.php';

		if (isset($_POST['update'])) {

			if (!isset($_POST['nome'])) {
				$_POST['nome'] = "";
			}
			if (!isset($_POST['descricao'])) {
				$_POST['descricao'] = "";
			}
			if (!isset($_POST['url'])) {
				$_POST['url'] = "";
			}
			if (!isset($_POST['id'])) {
				$_POST['id'] = "";
			}

			$id 		= $_POST['id'];
			$nome 		= $_POST['nome'];
			$descricao 	= $_POST['descricao'];
			$url 		= $_POST['url'];

			$isUpdate = $bannersController->update($id, $nome, $descricao, $url);	
			
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