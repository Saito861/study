<?php

require_once 'Menu.php';

//Ryoriクラス
class Ryori{

	public $menu;
	private array $menu_list;
	private int $total_fee;
	
	//料理を注文
	public function orderCooking($menu, $number){

		$this->menu_list[] = 
							array(
								'menu' => $menu,
								'number' => $number
							);
		
		//合計金額を算出
		$this->setTotalFee($menu->getFee(), $number);

	}

	public function setTotalFee(int $fee, int $number) :void {
		$this->total_fee = $this->getTotalFee() + ($fee * $number);
	}

	public function getTotalFee() :int {
		if ( !empty($this->total_fee)) {
			return $this->total_fee;
		}
		return 0;		
	}

	//レシートを表示
	public function displayReceipt(){

		$table = '<table>
				<tr>
					<td style="border:1px solid black">商品名</td>
					<td style="border:1px solid black">単価</td>
					<td style="border:1px solid black">数量</td>
					<td style="border:1px solid black">金額</td>
				</tr>';
		foreach ($this->menu_list as $menu_list) {
			$table .= '<tr><td style="border:1px solid black">'.$menu_list['menu']->getName().'</td><td style="border:1px solid black">'.$menu_list['menu']->getFee().'円</td><td style="border:1px solid black">'.$menu_list['number'].'</td><td style="border:1px solid black">'.$menu_list['menu']->getFee()*$menu_list['number'].'円</td></tr>';
		}

		$table .= '<tr><td style="border:1px solid black">計</td><td colspan="3" style="text-align:right; border:1px solid black">'.$this->getTotalFee().'円</td></tr></table>';
		echo 'レシート<br>';
		echo $table;

	}
}