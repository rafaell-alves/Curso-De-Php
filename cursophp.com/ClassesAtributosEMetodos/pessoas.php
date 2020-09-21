<?php

class Person {
    public $name;
    public $age;

    public function Talk(){
            echo "Speak ".$this->name."your age is ". $this->age ;
    }
}

    $rodrigo = new Person();
    $rodrigo -> name = "Rodrigo Oliveira";
    $rodrigo -> age = 18;
    $rodrigo -> Talk();
?>