<?php
//A temple for what an animal is
abstract class Animal {
    protected string $name;
    public function __construct(string $name){
        $this->name = $name;
    }

    //share code; Every Animal breathes the exact same way
    public function breathe(){
        echo "$this->name take a breath.<br>";
    }
    
    //Abstract Rule: Every animal maek a sound, but they do it different
    abstract public function makesound();   
}
//Child Class EXTENDS the astract class
class Dog extends Animal {
    #[Override]
    public function makesound()
    {
        echo "$this->name says Woof <br>";
    }
}

$dog = new Dog('Bubby');
$dog->breathe();
$dog->makesound();