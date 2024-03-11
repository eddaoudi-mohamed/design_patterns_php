<?php

namespace src\StaticFactory;


class BenzCar implements carInterface
{

    private $price;
    private $tax;

    public function __construct($price, $tax)
    {
        $this->price = $price;
        $this->tax = $tax;
    }

    public function calculatePrice()
    {
        return $this->price + $this->tax + 10000;
    }
}
