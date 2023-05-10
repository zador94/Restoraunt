<?php
include 'splAutoload.php';
$dish1 = new Dish('Rizotto', 'Какая то бурда', 2500);
$dish2 = new Dish('Пельмени', 'Какая то бурда', 5000);
$menu1 = new Menu();
$menu1->addListDish($dish1);
$menu1->addListDish($dish2);

$order = Order::getInstance();


$order->setListDish($dish1);
$order->setListDish($dish2);

$order->infoOrder($order->getListDish());





