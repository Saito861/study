<?php

require_once 'KaraageTeisyoku.php';
require_once 'ChikenNanban.php';
require_once 'Kare.php';

//Ryoriクラス
class Ryori{

	private array $menu_list;
		
	public function __construct()
	{
		$this->menu_list = array (
			'karaage_teisyoku' => new KaraageTeisyoku(),
			'chiken_nanban' => new ChikenNanban(),
			'kare' => new Kare()
		);
	}
	
	public function getMenuList() :array {
		return $this->menu_list;
	}
}