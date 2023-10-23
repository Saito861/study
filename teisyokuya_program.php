<?php

require_once 'Ryori.php';
require_once 'Teisyokuya.php';

$ryori = new ryori();

/** 料理を注文 */
$teisyokuya = new Teisyokuya();

$teisyokuya->orderCooking($ryori->getMenuList()['karaage_teisyoku']->name, $ryori->getMenuList()['karaage_teisyoku']->fee, 1);
$ryori->getMenuList()['karaage_teisyoku']->setSauceType('chiri_sauce', 1);
$teisyokuya->orderCooking($ryori->getMenuList()['karaage_teisyoku']->getSauce(), $ryori->getMenuList()['karaage_teisyoku']->getSauceFee(), $ryori->getMenuList()['karaage_teisyoku']->getPieces());

$teisyokuya->orderCooking($ryori->getMenuList()['chiken_nanban']->name, $ryori->getMenuList()['chiken_nanban']->fee, 2);
$teisyokuya->orderCooking($ryori->getMenuList()['kare']->name, $ryori->getMenuList()['kare']->fee, 3);

$teisyokuya->displayReceipt();

?>