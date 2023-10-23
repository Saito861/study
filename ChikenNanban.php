<?php

require_once 'Ryori.php';

//Menuクラス
class ChikenNanban extends Ryori{

	public string $name;
	public int $fee;

	public function __construct(){

		$this->name = 'chiken_nanban';
		$this->fee = 1000;

	}
}