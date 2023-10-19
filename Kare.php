<?php

require_once 'Ryori.php';

//Menuクラス
class Kare extends Ryori{

	private string $name;
	private int $fee;	

	public function __construct(){

		$this->name = 'kare';
		$this->fee = 750;

	}

	public function getName() :string {
		return $this->name;
	}

	public function getFee() :int {
		return $this->fee;
	}
}