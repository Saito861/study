<?php

require_once 'Ryori.php';

//Menuクラス
class ChikenNanban extends Ryori{

	private string $name;
	private int $fee;
	private int $number;

	public function __construct(){

		$this->name = 'chiken_nanban';
		$this->fee = 1000;

	}

	public function setName(string $name) :void {
		$this->name = $name;
	}

	public function setFee(int $fee) :void {
		$this->fee = $fee;
	}

	public function setNumber(int $number) :void {
		$this->number = $number;
	}

	public function getName() :string {
		return $this->name;
	}

	public function getFee() :int {
		return $this->fee;
	}

	public function getNumber() :int {
		return $this->number;
	}
}