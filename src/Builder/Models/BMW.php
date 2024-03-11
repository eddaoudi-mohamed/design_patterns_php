<?php 
namespace src\Builder\Models ; 

class BMW extends Car { 
    private $data = [] ; 


    public function setPart($name , $value){ 
        $this->data[$name]=  $value;
    }
}
