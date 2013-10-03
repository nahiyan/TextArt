<?php

class SimpleShape {
	protected $posX, $posY, $width, $height, $pointCoords, $backgroundCharacter = '&#9679;';
	
	public function __toString () {
		return "Simple Shape";
	}
	
	public function getPosX () {
		return $this->posX;
	}
	
	public function getPosY () {
		return $this->posY;
	}
	
	public function getWidth () {
		return $this->width;
	}
	
	public function getHeight () {
		return $this->height;
	}
	
	public function getPointCoords () {
		return $this->pointCoords;
	}
	
	public function setBackgroundCharacter ($character) {
		$this->backgroundCharacter = $character;
	}
	
	public function getBackgroundCharacter () {
		return $this->backgroundCharacter;
	}
}