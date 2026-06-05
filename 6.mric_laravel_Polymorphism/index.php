<?php
interface Animal {
    public function makesound();
}
class Cat implements Animal {
   
    public function makeSound(){
        echo "Meow";
    }
}
class Dog implements Animal{
    #[Override]
    public function makeSound(){
        echo "Woof";
    }
}
function animalSound(Animal $animal){
    $animal->makeSound();
}
animalSound(new Cat());
echo "<br>";
animalSound(new Dog());

?>
<br>
<!-- ______________Example in php at w3school -->

<?php
// Define the interface
interface Animal_A {
  public function makeSound();
}

// Implement the interface in a class
class Cat_1 implements Animal_A {
  public function makeSound() {
    echo "Meow";
  }
}

// Implement the interface in another class
class Dog_1 implements Animal_A {
  public function makeSound() {
    echo "Woff";
  }
}

$cat = new Cat_1();
$cat->makeSound();

echo "<br>";
$dog = new Dog_1();
$dog->makeSound();