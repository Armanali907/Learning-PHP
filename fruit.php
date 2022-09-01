<?php

class Fruit{
    public $color;
    public $name;
    
    public function __construct($color, $name){
        $this->color = $color;
        $this->name = $name;
    }
    public function get(){
        echo "The fruit color is : ".$this->color . "\n";
        
        echo "The fruit name is : ".$this->name."\n";
    }
    public function wash(){
        echo "Washing the fruit"."\n";
    }
    public function cut(){
        echo "Cutting the fruit"."\n";
    }
    public function eat(){
        echo "Eating the fruit"."\n";
    }
}

$apple = new Fruit("Red", "Apple");
$apple->get();
$apple->wash();
$apple->cut();
$apple->eat();

?>
