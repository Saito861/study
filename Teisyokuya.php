<?php

//Teisyokuyaクラス
class Teisyokuya{

	private array $order_lists;
	private ?int $total_fee;
	
	//料理を注文
	public function orderCooking($menu, int $fee, int $menu_number): void
	{

		$this->order_lists[] = 
							array(
								'menu' => $menu,
								'fee' => $fee,
								'menu_number' => $menu_number
							);
		
		//合計金額を算出
		$this->setTotalFee($fee, $menu_number);

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
		foreach ($this->order_lists as $order_list) {
			$table .= '<tr><td style="border:1px solid black">'.$order_list['menu'].'</td><td style="border:1px solid black">'.$order_list['fee'].'円</td><td style="border:1px solid black">'.$order_list['menu_number'].'</td><td style="border:1px solid black">'.$order_list['fee']*$order_list['menu_number'].'円</td></tr>';
		}

		$table .= '<tr><td style="border:1px solid black">計</td><td colspan="3" style="text-align:right; border:1px solid black">'.$this->getTotalFee().'円</td></tr></table>';
		echo 'レシート<br>';
		echo $table;

	}
}