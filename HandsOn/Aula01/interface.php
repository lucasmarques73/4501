<?php

interface Televisao
{
	
	public function aumentarVolume();
	public function diminuirVolume();
	public function trocarCanal($novoCanal);
	public function ligaDesliga();
	
}

class TV implements Televisao {
	
	private $volumeMaximo = 10;
	private $volume = 8;
	private $numeroCanais = 60;
	private $canal = 1;
	private $ligada = false;	
	
	public function aumentarVolume() {
		
		if($this->ligada) {
		
			if($this->volume < $this->volumeMaximo) {
				++$this->volume;
				echo "Volume: $this->volume.<br>";
			} else {
				echo "Volume já esta no máximo.<br>";
			}
			
		} else {
			
			echo "TV desligada.<br>";
			
		}
		
	}
	
	public function diminuirVolume() {
	
		if($this->volume > 0) {
			--$this->volume;
			echo "Volume: $this->volume.<br>";
		} else {
			echo "A Tv esta no mudo.<br>";
		}
	
	}
	
	public function trocarCanal($novoCanal) {
	
		if($novoCanal > 0 and $novoCanal <= $this->numeroCanais) {
			$this->canal = $novoCanal;
			echo "Canal alterado.<br>Canal atual: $this->canal.<br>";
		} else {
			echo 'Canal invalido.<br>';
		}
	
	}
	
	public function ligaDesliga() {
	
		// if($this->ligada) {
		// 	$this->ligada = false;
		// } else {
		// 	$this->ligada = true;
		// }

		$this->ligada = !$this->ligada;
	
	}
	
}

$tv = new TV();

// $tv->aumentarVolume();

// $tv->diminuirVolume();
// $tv->diminuirVolume();
// $tv->diminuirVolume();
// $tv->diminuirVolume();
// $tv->diminuirVolume();
// $tv->diminuirVolume();
// $tv->diminuirVolume();
// $tv->diminuirVolume();
// $tv->diminuirVolume();
// $tv->diminuirVolume();

// $tv->trocarCanal(80);

$tv->ligaDesliga();
$tv->aumentarVolume();