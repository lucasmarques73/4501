<?php 

include 'autoload.php';

use View\BaseView\BaseView;

$baseView = new BaseView;

# Routes;	
if (!isset($_GET['route'])) {
	$_GET['route'] = 'home';
}

switch ($_GET['route']) {

	case 'home':

		$baseView->render('Home', 'index');
		break;

	case 'banner':

		include 'Routes/BannersRoutes.php';

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