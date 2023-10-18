<?php

require_once 'KaraageTeisyoku.php';
require_once 'ChikenNanban.php';
require_once 'Kare.php';
require_once 'Ryori.php';

$karaage_teisyoku = new KaraageTeisyoku();
$chiken_nanban = new ChikenNanban();
$kare = new Kare();

/** 料理を注文 */
$ryori = new Ryori();

$karaage_teisyoku->setNumber(1);
$karaage_teisyoku->setSauceType('chiri_sauce', 1);

$chiken_nanban->setNumber(2);
$kare->setNumber(3);

$ryori->orderCooking($karaage_teisyoku, $karaage_teisyoku->getNumber());
$ryori->orderCooking($karaage_teisyoku, $karaage_teisyoku->getPieces());
$ryori->orderCooking($chiken_nanban, $chiken_nanban->getNumber());
$ryori->orderCooking($kare, $kare->getNumber());



$ryori->displayReceipt();

?>