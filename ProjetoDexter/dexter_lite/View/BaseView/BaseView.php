<?php 

namespace View\BaseView;

class BaseView
{
	private $header = 'View/header.php';
	private $contaier = '';
	private $footer = 'View/footer.php';	

	function __construct()
	{
	}

	private function loadPage($container, $var, $data)
	{
		include $this->header;
		$$var = $data;
		include $container;
		include $this->footer;
	}

	public function render($class, $view,$var = null, $data = null)
	{		
		$container = './View/'.$class.'/'.$view.'.php';
		$this->loadPage($container, $var, $data);
	}
}

 // class View
 // {
 	
	// public static function loadPage($view,$arquivo,$dados= "",$var="")
 // 	{
 		
 // 		$$var = $dados;
	// 	include './View/'.$view.'/'.$arquivo.'.php';
 		
 // 	}

 // 	public static function  location($rota)
 // 	{
 // 		header('Location: index.php?route='.$rota);
 // 	}
 // }