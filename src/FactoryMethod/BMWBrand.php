<?php

namespace src\FactoryMethod ; 


class BMWBrand  implements carBrandInterface { 
    public function createBrand()
    {
        return "BRAND BMW" ; 
    }
}
