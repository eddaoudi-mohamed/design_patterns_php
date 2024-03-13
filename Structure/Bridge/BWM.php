<?php

namespace Structure\Bridge;

class BWM extends Car
{
    public function __construct(CarColorInterface $CarColor)
    {
        parent::__construct($CarColor);
    }

    public function getProducte()
    {
        return "car BMW and color is " . $this->CarColor->getColor();
    }
}
