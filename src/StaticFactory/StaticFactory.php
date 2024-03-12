<?php

namespace src\StaticFactory;


class StaticFactory
{
    public static function Factory($type)
    {

        if ($type === "BMW") {
            return new BMWCar(1000);
        } else {
            return new BenzCar(2000, 120);
        }
    }
}
