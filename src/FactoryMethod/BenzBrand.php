<?php

namespace  src\FactoryMethod ; 

class BenzBrand implements carBrandInterface { 
    public function createBrand()
    {
        return "BRAND Benz"; 
    }
}
