<?php 

	trait LogTrait
	{
		public function log($message)
		{
			$log =  date("d/m/Y") . " ".  date("H:i:s") . " " . $message . "\n";
			file_put_contents(
				'log.txt',
				$log.PHP_EOL, FILE_APPEND
				);
		}
	}


	class z
	{

	}

	class x extends z
	{
		use LogTrait;

		public $log;

		public function save()
		{
			$this->log = $this->log('Arquivo de trait aberto dia');

			return $this->log;
		}
	}


	$classeX = new x();


	echo $classeX->save();
