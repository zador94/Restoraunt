<?php


//TODO
// сделать инкремент номера заказа


class Order
{
    private static $lastNumberOrder = 1;
    private static ?Order $instance = null;
    private array $listDish;
    private float $totalOrderValue;
    private string $orderStatus = 'новый';
    private int $numberOrder;

    private function __construct()
    {
        $this->numberOrder = self::$lastNumberOrder++;
    }

    public static function getInstance(): ?Order
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getNumberOrder(): int
    {
        return $this->numberOrder;
    }

    public function __clone()
    {
        $this->numberOrder = self::$lastNumberOrder++;
    }

    public function setNumberOrder(int $numberOrder): void
    {
        $this->numberOrder = $numberOrder;
    }

    public function getListDish(): array
    {
        return $this->listDish;
    }

   public function setListDish(Menu $menu, string $name): void
    {
        for ($i = 0; $i < count($menu->getListDish()); $i++)
        {
            if ($menu->getListDish()[$i]->getName() == $name) {
                $this->listDish[] = $menu->getListDish()[$i];
            }
        }
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

    private function calculationTotalOrderValue(): float
    {
        foreach ($this->listDish as $listDish) {
            $this->totalOrderValue += $listDish->getPrice();
        }
        return $this->totalOrderValue;
    }

    public function deleteListOrder(string $name)
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

    public function infoOrder(): void
    {
        echo 'Номер заказа: ' . $this->numberOrder . '<br>';
        echo 'Статус заказа: ' . $this->getOrderStatus() . '<br><br>';
        echo 'Список блюд: <br>';
            foreach ($this->listDish as $dish)
            {
                echo 'Название блюда: ' . $dish->getName() . '<br>' . 'Описание: ' . $dish->getDescription()
                    . '<br>' .'Цена блюда: ' . $dish->getPrice() . '<br>------------------------<br>';
            }
        echo 'Общая сумма заказа: ' . $this->calculationTotalOrderValue();
    }




}