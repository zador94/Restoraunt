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
$order1 = Order::getInstance();
$order2 = Order::getInstance();


echo $order->getnumberOrder();
echo $order1->getnumberOrder();
echo $order2->getnumberOrder();





