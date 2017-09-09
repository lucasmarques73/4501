<?php 

trait Message
{
	public static function set($message, $type)
	{
		$_SESSION['message']['type'] = $type;
		$_SESSION['message']['value'] = $message;
	}

	public static function get()
	{
		if (isset($_SESSION['message'])) 
		{
			echo "<div class='alert alert-". $_SESSION['message']['type'] ."' role='alert'>". $_SESSION['message']['value'] ."</div>";
		}

		self::clean();
	}

	public static function clean()
	{
		unset($_SESSION['message']);
	}
}

Message::set('Message test', 'success');
Message::get();