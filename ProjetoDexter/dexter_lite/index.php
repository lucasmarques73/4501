<?php 

include 'Src/Conexao/Conexao.php';

use Src\Conexao\Conexao as Conexao;

include 'Model/Banners/Banner.php';
use Model\Banners\Banner as Banner;

$pdo = Conexao::getInstance();


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

		$prepare = $pdo->query('SELECT * FROM banners ORDER BY id');
		$prepare->execute();

		$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

		$banners = [];
		foreach ($result as $key => $item) 
		{
			$banners[$key] = new Banner($item['id'],$item['nome'],$item['descricao'],$item['url']);
	
		}

		include 'View/Banner/index.php';

		break;

	case 'new_banner':

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

			$query = 'INSERT INTO banners (nome, descricao, url) VALUES (:nome, :descricao, :url)';

			$campos = array(
				':nome' 		=> $_POST['nome'], 
				':descricao' 	=> $_POST['descricao'], 
				':url' 			=> $_POST['url']
			);

			$insert = $pdo->prepare($query);

			$insert->execute($campos);

			header('Location: ?route=banner');
		}

		include 'View/Banner/new.php';

		break;

	// Não está sendo usado
	// case 'create_banner':

	// 	$query = 'INSERT INTO banners (nome, descricao, url) VALUES (:nome, :descricao, :url)';

	// 	$campos = [$nome = 'teste2', $descricao = 'teste2descricao', $url = 'urlteste2'];

	// 	$insert = $pdo->prepare($query);

	// 	$insert->execute($campos);

	// 	//------------------------------------------------------

	// 	$prepare = $pdo->query('SELECT * FROM banners');
	// 	$prepare->execute();

	// 	$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

	// 	$banners = [];
	// 	foreach ($result as $key => $item) 
	// 	{
	// 		$banners[$key] = new Banner($item['id'],$item['nome'],$item['descricao'],$item['url']);

	// 	}

	// 	include 'View/Banner/index.php';

	// 	break;

	case 'edit_banner':

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

			$query = 'UPDATE banners SET nome = :nome, descricao = :descricao, url = :url where id = :id';

			$campos = array(
				':nome' 		=> $_POST['nome'], 
				':descricao' 	=> $_POST['descricao'], 
				':url' 			=> $_POST['url'],
				':id' 			=> $_POST['id']
				);

			$statement = $pdo->prepare($query);

			$statement->execute($campos);

			header('Location: ?route=banner');
		}

		$query = 'SELECT * FROM banners where id = :id';

		$campos = [$id = $_GET['id']];

		$statement = $pdo->prepare($query);

		$statement->execute($campos);

		$result = $statement->fetch(PDO::FETCH_ASSOC);


		$banner = new Banner($result['id'],$result['nome'],$result['descricao'],$result['url']);

		include 'View/Banner/edit.php';

		break;

	//Não está sendo usado;
	// case 'update_banner':


	// 	var_dump($_POST);
	// 	die();

	// 	$query = 'UPDATE banners SET nome = :nome, descricao = :descricao, url = :url where id = :id';

	// 	$campos = [$nome = 'teste', $descricao = 'teste descricao', $url = 'teste url', $id = 11];

	// 	$statement = $pdo->prepare($query);

	// 	$statement->execute($campos);

	// 	//-------------------------------

	// 	$prepare = $pdo->query('SELECT * FROM banners');
	// 	$prepare->execute();

	// 	$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

	// 	$banners = [];
	// 	foreach ($result as $key => $item) 
	// 	{
	// 		$banners[$key] = new Banner($item['id'],$item['nome'],$item['descricao'],$item['url']);

	// 	}

	// 	include 'View/Banner/index.php';

	// 	break;

	case 'delete_banner':

		$query = 'DELETE FROM banners where id = :id';

		$campos = [$id = $_GET['id']];

		$statement = $pdo->prepare($query);

		$statement->execute($campos);


		//---------------------------------------------
		$prepare = $pdo->query('SELECT * FROM banners');
		$prepare->execute();

		$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

		$banners = [];
		foreach ($result as $key => $item) 
		{
			$banners[$key] = new Banner($item['id'],$item['nome'],$item['descricao'],$item['url']);

		}

		include 'View/Banner/index.php';
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