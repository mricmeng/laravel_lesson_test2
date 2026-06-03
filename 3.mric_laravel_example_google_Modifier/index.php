<!-- ____________________________________Code Examples1.______________________________________________ -->
<!-- 
 Public Modifier (Access Everywhere)
 Anyone can read or change this property from anywhere outside the class. -->
<?php
class User {
    public $name = "Alice";
}

$user = new User();
echo $user->name; // Works! Outputs: Alice

?>
<!-- _________________________________________end____________________________________________ -->
<br>




<!-- ____________________________________Code Examples2.______________________________________________ -->

<!-- 2. Protected Modifier (Access via Inheritance) -->
<!-- Only the class itself and classes that extend it (subclasses) can look at this data. -->
<?php
class ParentClass {
    protected $bonus = 100;
}

class ChildClass extends ParentClass {
    public function getBonus() {
        return $this->bonus; // Works! Subclass can access protected members
    }
}

$child = new ChildClass();
// echo $child->bonus; // Fatal Error: Cannot access protected property
echo $child->getBonus(); // Works! Outputs: 100

?>
<!-- ____________________________________End____________________________________________________________ -->




<!-- ____________________________________Code Examples3.______________________________________________ -->

<!-- 3. Private Modifier (Strictly Restricted) -->
<!-- Only the exact class that defined the property can touch it. Even child classes cannot see it. -->
<?php
class BankAccount {
    private $pin = 1234;
}

class ATM extends BankAccount {
    public function showPin() {
        // return $this->pin; // Notice/Error: Undefined property or cannot access
    }
}

$account = new BankAccount();
// echo $account->pin; // Fatal Error: Cannot access private property

?>
<!-- ____________________________________End________________________________________________________ -->
<br>


<!-- ____________________________________Code Examples4.______________________________________________ -->

<!-- Code Example: Bank Account -->
<!-- This example shows how a setter blocks bad data (like a negative deposit) and how a getter allows safe retrieval. -->
<?php
class BankAccount_Mric {
    // 1. Keep the data private so it cannot be changed directly
    private $balance = 0.0;

    // 2. The Setter: Validates data before changing the balance
    public function deposit($amount) {
        if ($amount <= 0) {
            echo "Error: Deposit amount must be positive.<br>";
            return;
        }
        $this->balance += $amount;
    }

    // 3. The Getter: Allows external code to read the balance safely
    public function getBalance() {
        // You could add logging or currency formatting here if needed
        return "$" . number_format($this->balance, 2);
    }
}

// --- Usage ---

$myAccount = new BankAccount_Mric();

// This would trigger an error because the property is private:
// $myAccount->balance =-500; 

// Use the setter to add money safely
$myAccount->deposit(150.50);
$myAccount->deposit(200);
$myAccount->deposit(-20); // Triggers the validation error rule

// Use the getter to view the money safely
echo "Current Balance: " . $myAccount->getBalance(); 
// Outputs: Current Balance: $150.50

?>
<!-- ____________________________________End_________________________________________________ -->
<br>



<!-- ____________________________________Code Examples5.______________________________________________ -->
<?php
class User_Mric {
    private $username;
    private $age;

    // 1. The Constructor: Runs automatically during object creation
    public function __construct($startingName, $startingAge) {
        $this->username = $startingName;
        $this->setAge($startingAge); // Route through setter to reuse validation logic
    }

    // 2. Setter with validation
    public function setAge($newAge) {
        if ($newAge < 0) {
            echo "Error: Age cannot be negative.<br>";
            return;
        }
        $this->age = $newAge;
    }

    // 3. Getters to read data
    public function getUsername() {
        return $this->username;
    }

    public function getAge() {
        return $this->age;
    }
}

// --- Usage ---

// Data is passed directly into the parentheses upon creation
$user1 = new User_Mric("Alice", 25);

echo $user1->getUsername() . " is " . $user1->getAge() . " years old.<br>";
// Outputs: Alice is 25 years old.


// This will trigger the validation check inside the constructor
$user2 = new User_Mric("Bob", -5); 

?>
<!-- ____________________________________end______________________________________________ -->