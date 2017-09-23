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

		$baseView->render('Clientes', 'index');
		break;

	case 'fale_conosco':
		
		$baseView->render('FaleConosco', 'index');
		break;

	case 'funcionalidades':
		
		$baseView->render('Funcionalidades', 'index');
		break;

	case 'funcionarios':
		
		$baseView->render('Funcionarios', 'index');
		break;

	case 'servicos':
		
		$baseView->render('Servicos', 'index');
		break;

	default:
		$baseView->render('Erro', '404');
		break;
}