<?php
class Order extends Waiter
{
    private static $instance;
    private array $listDish;
    private float $totalOrderValue = 0;
    private string $orderStatus = 'новый';

    private function __construct(private int $numberOrder)
    {
    }
    public static function getInstance()
    {
        if(static::$instance == null)
        {
            static::$instance = new Order(111111);
        }
        return static::$instance;
    }

    public function getNumberOrder(): int
    {
        return $this->numberOrder;
    }

    public function setNumberOrder(int $numberOrder): void
    {
        $this->numberOrder = $numberOrder;
    }

    public function getListDish(): array
    {
        return $this->listDish;
    }

    public function setListDish(Dish $dish): void
    {
        $this->listDish[] = $dish;
    }

    public function getTotalOrderValue(): float
    {
        return $this->totalOrderValue;
    }

    public function setTotalOrderValue(float $totalOrderValue): void
    {
        $this->totalOrderValue = $totalOrderValue;
    }

    public function getOrderStatus(): string
    {
        return $this->orderStatus;
    }

    public function setOrderStatus(string $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    private function calculationTotalOrderValue()
    {
        foreach ($this->listDish as $listDish) {
            $this->totalOrderValue += $listDish->getPrice();
        }
        return $this->totalOrderValue;
    }

    public function infoOrder($listDish)
    {
        echo 'Номер заказа' . $this->numberOrder . '<br>';
        echo 'Список блюд: <br>';
            foreach ($this->listDish as $dish)
            {
                echo 'Название блюда: ' . $dish->getName() . '<br>' . 'Описание: ' . $dish->getDescription()
                    . '<br>' .'Цена блюда: ' . $dish->getPrice() . '<br>------------------------<br>';
            }
        echo 'Общая сумма заказа: ' . $this->calculationTotalOrderValue();
    }

}