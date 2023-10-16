<?php

require_once 'Ryori.php';

//Menuクラス
class KaraageTeisyoku extends Ryori{

	private string $name;
	private int $fee;
	private ?string $sauce;
	private ?int $sauce_fee;
	private ?int $pieces;

	public function __construct(?string $sauce_type, ?int $pieces){

		$this->name = 'karaage_teisyoku';
		$this->fee = 900;
		if (!empty($sauce_type) && !empty($pieces)) {
			$this->setSauceType($sauce_type, $pieces);
		}

	}

	public function setSauceType(string $sauce_type, int $pieces) :void {

		if ($sauce_type == 'chiri_sauce') {
			$this->setSauce('chiri_sauce');
			$this->setSauceFee(50);
			
		} else if ($sauce_type == 'daicon_oroshi_sauce') {
			$this->setSauce('daicon_oroshi_sauce');
			$this->setSauceFee(100);

		} else { 
			$this->setSauce('wasabi_syoyu');
			$this->setSauceFee(50);
		}

		//数量
		$this->setPieces($pieces);
	}

	public function setName(string $name) :void {
		$this->name = $name;
	}

	public function setFee(int $fee) :void {
		$this->fee = $fee;
	}

	public function setSauce(string $sauce) :void {
		$this->sauce = $sauce;
	}

	public function setSauceFee(int $sauce_fee) :void {
		$this->sauce_fee = $sauce_fee;
	}

	public function setPieces(int $pieces) :void {
		$this->pieces = $pieces;
	}
	

	public function getName() :string {
		return $this->name;
	}

	public function getFee() :int {
		return $this->fee;
	}

	public function getSauce() :string {
		return $this->sauce;
	}

	public function getSauceFee() :int {
		return $this->sauce_fee;
	}

	public function getPieces() :int {
		return $this->pieces;
	}
}