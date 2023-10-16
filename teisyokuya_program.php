<?php

require_once 'KaraageTeisyoku.php';
require_once 'ChikenNanban.php';
require_once 'Kare.php';
require_once 'Ryori.php';

$karaage_teisyoku = new KaraageTeisyoku('daicon_oroshi_sauce', 1);
$chiken_nanban = new ChikenNanban();
$kare = new Kare();

/** 料理を注文 */
$ryori = new Ryori();

$ryori->orderCooking($karaage_teisyoku, 1);
$ryori->orderCooking($chiken_nanban, 2);
$ryori->orderCooking($kare, 3);

$ryori->displayReceipt();

?>