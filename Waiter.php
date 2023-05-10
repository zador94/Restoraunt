<?php

abstract class Waiter
{
    public static function newOrder(): Waiter
    {
        return new static;
    }

    public function setListDish(Dish $dish): void
    {

    }

}