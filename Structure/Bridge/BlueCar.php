<?php

namespace Structure\Bridge;

class BlueCar  implements CarColorInterface
{
    public function getColor()
    {
        return "Blue";
    }
}
