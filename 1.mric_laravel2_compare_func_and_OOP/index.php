<!-- ________Comparation of Function and OOP______1___ -->

<!-- Functoin -->
<?php
function myMessage(){
    echo "Hello World <br>";
    echo "I am Meng Chomraoen <br>";
}
myMessage();
// Hello World
// I am Meng Chomraoen

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
$book->nameBook();    //The Art of Deal
$book->priceBook();   //The price book is $100

?>







<br>
<!-- ________Comparation of Function and OOP_____2____ -->


<!-- Function with parameter -->
<?php
function familyName($fname){
    echo "My name is Meng $fname <br>";
}
familyName("Chomraoen");  //My name is Meng Chomraoen
familyName("Jhon");       //My name is Meng Jhon
familyName("Richard");    //My name is Meng Richard
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
$Samsung->getName(); //Sumsang Note 9
$Samsung->getPrice(); //$1200

?>
<br>






<!-- ________Comparation of Function and OOP_____3____ -->

<!-- Function with Parameter -->
<?php
function familName($fname,$year){
    echo "My name is Meng $fname .Born in $year <br>";
}
familName("Chomraone","2018");  //My name is Meng Chomraone .Born in 2018
familName("Chan", 1999);        //My name is Meng Chan .Born in 1999

?>
<br>
<!-- OOP with Parameter -->
<?php
class Product 
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
    function information_product()
    {
        echo "<br> ID:".$this->id;
        echo "<br> Name:".$this->name;
        echo "<br> QTY:".$this->qty;
        echo "<br> Pric:".$this->price;
    }
}
$Obj_person = new Product();
$Obj_person-> setData(1, "Apple", 20, 15);
$Obj_person->information_product();
// ID:1
// Name:Apple
// QTY:20
// Pric:15


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
echo "The sum : 4 + 5 = ".sum(4,5)."<br>";            //The sum : 4 + 5 = 9
echo "The sum : 100 + 200 = ".sum(100,200)."<br>";    //The sum : 100 + 200 = 300

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
echo "The sum : 4 + 5 = " . $calculator->sum(4,5)."<br>";             //The sum : 4 + 5 = 9
echo "The sum : 100 + 200 = " . $calculator->sum(100, 200) . "<br>";  //The sum : 100 + 200 = 300