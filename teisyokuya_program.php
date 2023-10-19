<?php

require_once 'Ryori.php';
require_once 'Teisyokuya.php';

$ryori = new ryori();

/** 料理を注文 */
$teisyokuya = new Teisyokuya();

$teisyokuya->orderCooking($ryori->getMenuList()['karaage_teisyoku']->getName(), $ryori->getMenuList()['karaage_teisyoku']->getFee(), 1);
$ryori->getMenuList()['karaage_teisyoku']->setSauceType('chiri_sauce', 1);
$teisyokuya->orderCooking($ryori->getMenuList()['karaage_teisyoku']->getSauce(), $ryori->getMenuList()['karaage_teisyoku']->getSauceFee(), $ryori->getMenuList()['karaage_teisyoku']->getPieces());

$teisyokuya->orderCooking($ryori->getMenuList()['chiken_nanban']->getName(), $ryori->getMenuList()['chiken_nanban']->getFee(), 2);
$teisyokuya->orderCooking($ryori->getMenuList()['kare']->getName(), $ryori->getMenuList()['kare']->getFee(), 3);

$teisyokuya->displayReceipt();

?>