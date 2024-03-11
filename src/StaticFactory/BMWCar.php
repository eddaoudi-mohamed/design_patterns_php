<?php

namespace src\StaticFactory;


class BMWCar implements carInterface
{

    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function calculatePrice()
    {
        return $this->price + 1000000;
    }
}
