<?php 

namespace lib\View;

final class View
{
	private static $template;
	private static $data = array(); 
	private static $layoutHeader = '../views/front/layout/_topo.phtml'; 
	private static $layoutFooter = '../views/front/layout/_rodape.phtml';

	private function __construct($template, $data = array())
	{
		// $this->template = $template;
		// $this->data = $data;
	}

	public function render()
	{
		// include(self::$layoutHeader);
		
		// if (isset(self::$template)) 
		// {
		// 	include(self::$template);
		// }

		// include(self::$layoutFooter);
	}

	public static function admin($template, $data = array())
	{
		// self::$layoutHeader = '../views/admin/layout/_topo.phtml';
		// self::$template = '../views/admin/' . $template . '.phtml';
		// self::$layoutFooter = '../views/admin/layout/_rodape.phtml';

		include('../views/admin/layout/_topo.phtml');
		include('../views/admin/' . $template . '.phtml');
		include('../views/admin/layout/_rodape.phtml');

	}

	public static function front($template, $data = array())
	{
		// self::$layoutHeader = '../views/front/layout/_topo.phtml';
		// self::$template = '../views/front/' . $template . '.phtml';
		// self::$layoutFooter = '../views/front/layout/_rodape.phtml';


		include('../views/front/layout/_topo.phtml');
		include('../views/front/' . $template . '.phtml');
		include('../views/front/layout/_rodape.phtml');
	}
}