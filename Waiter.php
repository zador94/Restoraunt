<?php

class Waiter
{
    public function getOrder()
    {
        return Order::getInstance();
    }
    public function setListDish(Order $order, Dish $dish): void
    {
        $order->setListDish($dish);
    }

    public function getInfoOrder(Order $order): void
    {
        $order->infoOrder();
    }

    public function statusOrderPrepare(Order $order): void
    {
        $order->setOrderStatus('готовится');
    }
}