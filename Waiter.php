<?php

class Waiter
{
    public function getOrder()
    {
        return Order::getInstance();
    }
    public function setListDish(Order $order, Menu $menu, string $name): void
    {
        $order->setListDish($menu, $name);
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