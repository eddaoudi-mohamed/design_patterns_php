<?php

namespace src\SimpleFactory;


class CarFactory
{


    public function createCar($type)
    {
        return new Car($type);
    }
}
