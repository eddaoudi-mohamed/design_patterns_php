<?php 

namespace src\FactoryMethod; 


class BMWbrandFactory implements FactoryBrand { 
    public function buildeBrand()
    {
        return new BMWBrand() ; 
    }
}
