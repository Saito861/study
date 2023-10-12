<?php

require_once 'Menu.php';
require_once 'Ryori.php';

$karaage_teisyoku = new Menu();
$karaage_teisyoku->setName('karaage_teisyoku');
$karaage_teisyoku->setFee(900);

$chiken_nanban = new Menu();
$chiken_nanban->setName('chiken_nanban');
$chiken_nanban->setFee(1000);

$kare = new Menu();
$kare->setName('kare');
$kare->setFee(750);

$karaage_teisyoku_chiri_sorce = new Menu();
$karaage_teisyoku_chiri_sorce->setName('chiri_sorce');
$karaage_teisyoku_chiri_sorce->setFee(50);

$karaage_teisyoku_daicon_oroshi = new Menu();
$karaage_teisyoku_daicon_oroshi->setName('daicon_oroshi');
$karaage_teisyoku_daicon_oroshi->setFee(100);

$karaage_teisyoku_wasabi_syoyu = new Menu();
$karaage_teisyoku_wasabi_syoyu->setName('wasabi_syoyu');
$karaage_teisyoku_wasabi_syoyu->setFee(50);

/** 料理を注文 */
$ryori = new Ryori();

$ryori->orderCooking($karaage_teisyoku, 1);
$ryori->orderCooking($karaage_teisyoku_daicon_oroshi, 1);
$ryori->orderCooking($chiken_nanban, 2);
$ryori->orderCooking($kare, 3);

$ryori->displayReceipt();

?>