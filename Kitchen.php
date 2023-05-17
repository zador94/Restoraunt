<?php

class Kitchen
{
    public function methodCookingDish(): string
    {
        return 'Блюдо попало на кухню и готовится';
    }


    public function statusDishComplete(Order $order): void
    {
        $order->setOrderStatus('готово');
    }
}