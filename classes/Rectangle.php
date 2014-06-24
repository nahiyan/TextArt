<?php

namespace Nahiyan\TextArt;

class Rectangle extends SimpleShape {
	
	public function __construct ($posX, $posY, $width, $height) {
		$this->posX = $posX;
		$this->posY = $posY;
		$this->width = $width;
		$this->height = $height;
		$this->generatePointCoords();
	}
	
	public function __toString () {
		return "Rectangle";
	}
	
	public function generatePointCoords () {
		if (($this->width * $this->height) >= 1) {
			for ($y = 1; $y <= $this->height; $y++) {
				for ($x = 1; $x <= $this->width; $x++) {
					$this->pointCoords[($x+$this->posX)][($y+$this->posY)] = $this->backgroundCharacter;
				}
			}
		}else{
			$this->pointCoords = array ();
		}
	}
	
	public function setBorderSize ($size) {
		$this->borderSize = $size;
	}
}