<?php

class Menu
{
    private array $listDish;

    public function addListDish(Dish $dish) : void
    {
        $this->listDish[] = $dish;
    }

    public function removeListDish(string $name) : void
    {
        foreach ($this->listDish as $key=>$value) {
            if ($value->getName() == $name) {
                unset($this->listDish[$key]);
                break;
            }
        }
            if ($value->getName() != $name || $name == '') {
                throw new NameException('Неправильное название блюда');
            }
    }

    public function getListDish() : array
    {
        return $this->listDish;
    }

}