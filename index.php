<?php

include 'splAutoload.php';
/*$dish1 = new Dish('Rizotto', 'Какая то бурда', 2500);
$dish2 = new Dish('Пельмени', 'Пища богов', 5000);
$dish3 = new Dish('Цезарь', 'Еще одна бурда', 500);
$dish4 = new Dish('Стейк', 'Вкусная штука', 6000);
$menu = new Menu();
$menu->addListDish($dish1);
$menu->addListDish($dish2);
$menu->addListDish($dish3);
$menu->addListDish($dish4);*/

/*$waiter = new Waiter();
$waiter1 = new Waiter();*/


/*
$waiter->setListDish($order, $menu, 'Пельмени');
$waiter->setListDish($order, $menu, 'Цезарь');

$waiter->statusOrderPrepare($order);

$kitchen = new Kitchen();
$kitchen->statusDishComplete($order);*/


$order = Order::getInstance();
echo $order->getnumberOrder();
$order2 = unserialize(serialize($order));
echo $order2->getNumberOrder();
$order3 = unserialize(serialize($order2));
echo $order3->getNumberOrder();













