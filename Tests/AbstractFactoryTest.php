<?php

namespace Tests;


require_once  __DIR__.'/../vendor/autoload.php' ;  

use PHPUnit\Framework\TestCase;
use src\Abstractfactory\BMWCar;
use src\Abstractfactory\CarAbstractFactory;

class AbstractFactoryTest extends TestCase
{
    public function testCanCreateBMWCar()
    {
        $CarFactory = new CarAbstractFactory(10000);
        $mycar = $CarFactory->createBMWCar();
        $this->assertInstanceOf(BMWCar::class, $mycar);
    }
}
$obj = new AbstractFactoryTest("AbstractFactoryTest") ; 
echo "hello in here "  ; 

$obj->testCanCreateBMWCar() ; 