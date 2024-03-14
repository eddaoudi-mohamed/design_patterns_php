<?php

namespace Structure\Decorator;

class PaintingRedDecorator extends PaintingDecorator
{

    private const COLOR = "-RED-";

    public function paint(Car $car)
    {
        $car->setColor(self::COLOR);
        parent::paint($car);
    }
}
