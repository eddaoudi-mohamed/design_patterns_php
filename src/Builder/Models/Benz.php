<?php 
namespace src\Builder\Models ; 

class Benz  extends Car { 
    private $data = [] ; 
    public function setPart($name , $value){ 
        $this->data[$name]=  $value;
    }
}
