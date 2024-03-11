<?php

namespace src\Abstractfactory;


class StaticFactory
{
    public static function StaticFactory($type)
    {

        if ($type === "BMW") {
            return new BMWCar(1000);
        } else {
            return new BenzCar(2000, 120);
        }
    }
}
