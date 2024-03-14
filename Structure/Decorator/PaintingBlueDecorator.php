<?php

namespace Structure\Decorator;

class PaintingBlueDecorator extends PaintingDecorator
{

    private const COLOR = "-BLUE-";

    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        parent::paint($car);
    }
}
