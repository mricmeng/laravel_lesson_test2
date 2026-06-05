<?php
class Person {
    private $age;
    public function setAge($age){
        if($age>0){
            $this->age = $age;
        }
    }
    public function getAge(){
        return $this->age;
    }
}
$person = new Person ();
$person->setAge(25);
echo $person->getAge();
?>