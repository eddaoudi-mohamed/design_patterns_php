<?php

namespace Structure\Decorator;


class Car
{
    private $color = '';


    public function setColor($color)
    {
        $this->color  .= $color;
    }
}
