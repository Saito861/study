<?php

require_once 'Ryori.php';

//Menuクラス
class Kare extends Ryori{

	public string $name;
	public int $fee;	

	public function __construct(){

		$this->name = 'kare';
		$this->fee = 750;

	}
}