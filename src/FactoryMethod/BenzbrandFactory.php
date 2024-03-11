<?php 

namespace src\FactoryMethod ; 


class BenzbrandFactory implements FactoryBrand { 
    public function buildeBrand()
    {
        return new BenzBrand()  ; 
    
    
    }
}
