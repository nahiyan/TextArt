<?php

class Canvas {
	private $pointCoords = array (null), $width, $height, $backgroundCharacter = '&nbsp;';
	
	const WHITE_CHARACTER = "<span class='white'>0</span>";
	
	public function __construct ($width, $height) {
		$this->width = $width;
		$this->height = $height;
	}
	
	public function add ($object) {
		$tempPointCoords = $object->getPointCoords();
		foreach ($tempPointCoords as $key => $value) {
			foreach ($value as $key2 => $value2) {
				$this->pointCoords[$key][$key2] = $value2;
			}
		}
	}
	
	public function render () {
		$render = null;
		for ($y = 1; $y <= $this->height; $y++) {
			for ($x = 1; $x <= $this->width; $x++) {
				$render .= isset($this->pointCoords[$x][$y]) ? $this->pointCoords[$x][$y] : $this->backgroundCharacter;
			}
			$render .= '<br/>';
		}
		echo $render;
	}
	
	public function setBackgroundCharacter ($character) {
		$this->backgroundCharacter = $character;
	}
	
	public function getBackgroundCharacter () {
		return $this->backgroundCharacter;
	}
}