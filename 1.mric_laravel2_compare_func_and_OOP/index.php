<!-- ________Comparation of Function and OOP______1___ -->

<!-- Functoin -->
<?php
function myMessage(){
    echo "Hello World <br>";
    echo "I am Meng Chomraone <br>";
}
myMessage();

?>

<br>

<!-- OOP -->
<?php

class Book 
{
    public function nameBook()
    {
        echo "The Art of Deal <br>";
    }
    public function priceBook()
    {
        echo "The price book is $100 <br>";
    }
}
$book = new Book();
$book->nameBook();
$book->priceBook();

?>







<br>
<!-- ________Comparation of Function and OOP_____2____ -->


<!-- Function with parameter -->
<?php
function familyName($fname){
    echo "My name is Meng $fname <br>";
}
familyName("Chomraoen");
familyName("Jhon");
familyName("Richard");
?>
<br>


<!-- OOP with Parameter -->
<?php 
class Mobile
{
    public $title;
    public $price;
    public function setName($par)
    {
        $this->title = $par;
    }
    public function getName()
    {
        echo $this->title."<br>";
    }
    public function setPrice($par)
    {
        $this->price = $par;
    }
    public function getPrice()
    {
        echo $this->price."<br>";
    }
}
$Samsung = new Mobile ();
$Samsung->setName ("Sumsang Note 9");
$Samsung->setPrice ("$1200");
$Samsung->getName();
$Samsung->getPrice();

?>
<br>






<!-- ________Comparation of Function and OOP_____3____ -->

<!-- Function with Parameter -->
<?php
function familName($fname,$year){
    echo "My name is Meng $fname .Born in $year <br>";
}
familName("Chomraone","1992");
familName("Chanda", 1999);

?>
<br>
<!-- OOP with Parameter -->
<?php
class Person 
{
    public $id;
    public $name;
    public $qty;
    public $price;
    function setData ($id, $name, $qty, $price)
    {
        $this->id =$id;
        $this->name =$name;
        $this->qty =$qty;
        $this->price =$price;
    }
    function information_person()
    {
        echo "<br> ID:".$this->id;
        echo "<br> Name:".$this->name;
        echo "<br> QTY:".$this->qty;
        echo "<br> Pric:".$this->price;
    }
}
$Obj_person = new Person();
$Obj_person-> setData(1, "Mric Meng", 20, 15);
$Obj_person->information_person();

?>


<br>
<br>
<!-- ________Comparation of Function and OOP_____4____ -->

<!-- Function with Parameter -->

<?php
function sum($x ,$y){
    $z =$x +$y;
    return $z;
}
echo "The sum : 4 + 5 = ".sum(4,5)."<br>";
echo "The sum : 100 + 200 = ".sum(100,200)."<br>";

?>

<br>
<!-- OOP with Parameter -->
<?php
//1.Define the class
class Calculator 
{
    //Define the method inside the class
    public function sum($x, $y)
    {
        $z = $x + $y;
        return $z;
    }
}

//2. Instantiate the object
$calculator = new Calculator();

//3.Call the method using the object
echo "The sum : 4 + 5 = " . $calculator->sum(4,5)."<br>";
echo "The sum : 100 + 200 = " . $calculator->sum(100, 200) . "<br>";