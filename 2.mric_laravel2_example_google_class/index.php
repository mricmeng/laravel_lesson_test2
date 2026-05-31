<p>Here is how you can expand the class to include <br>
    a constructor, multiple operations, and a running total. <br>
</p>
<p> Advanced Calculator ClassThis version stores a running total inside the object <br>
    so you can chain operations together.
</p>

<!--____________constructor, multiple operations, and a running total. ________ -->
<?php
class AdvancedCalculator {
    // 1. Property to store the running total
    private $total;

    // 2. Constructor to set the initial value (defaults to 0)
    public function __construct($initialValue = 0) {
        $this->total = $initialValue;
    }

    // 3. Method for addition
    public function add($value) {
        $this->total += $value;
        return $this; // Returns the object to allow method chaining
    }

    // 4. Method for subtraction
    public function subtract($value) {
        $this->total -= $value;
        return $this;
    }

    // 5. Method for multiplication
    public function multiply($value) {
        $this->total *= $value;
        return $this;
    }

    // 6. Method to get the final result
    public function getTotal() {
        return $this->total;
    }
}

// --- HOW TO USE IT ---

// Start a calculation with an initial value of 10
$myCalc = new AdvancedCalculator(10);

// Add 5, subtract 3, multiply by 2 (10 + 5 - 3 = 12 * 2 = 24)
$myCalc->add(5)->subtract(3)->multiply(2);

echo "The final total is: " . $myCalc->getTotal(); 
// Output: The final total is: 24
?>
<!-- --------------------------------------------------------------------------------------------------------------------------- -->
<!-- Key OOP Concepts Used Here -->
<!-- private $total: A property that only this class can change. 
 This protects the data from outside interference. -->
<!-- __construct(): A special magic method that runs automatically 
 when you type new AdvancedCalculator(). -->
<!-- return $this;: This returns the object itself, allowing 
 you to link methods together in one line (called method chaining). -->
<!-- ---------------------------------------------------------------------------------------------------------------------------- -->



<br>
<!-- ________________New Example______2__________ -->
<p>Here are explanations and examples for
    both Encapsulation (Public vs Private)
    and Inheritance (Scientific Calculator). </p>

<!-- 1. Public vs Private (Encapsulation) -->
<!-- Visibility keywords control who can read or change the variables inside your class. -->
<!-- public: Anyone can access or change this from outside the class. -->
<!-- private: Only code inside this specific class can see or change it. -->

<!-- Why use private? -->
<!-- It protects your data. For example, you do not want someone to manually force the calculator total to 
 text like "hello", which would break the math functions. -->
<br>
<?php
class BankAccount {
    // Private: No one can change the balance directly from the outside
    private $balance = 0;

    // Public: Anyone can call this method to deposit money safely
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    // Public: Safe way for the outside world to check the balance
    public function getBalance() {
        return $this->balance;
    }
}

$account = new BankAccount();
$account->deposit(100);
$account->deposit(1000);

// $account->balance = 5000; // ❌ ERROR! This will fail because it is private.
echo "Balance: $" . $account->getBalance(); //  SUCCESS! Output: 100
?>
<!-- ____________________________________end___________________________________ -->
<br>
<br>





<!-- ________________New Example______3__________ -->
<!-- 2. Inheritance (Scientific Calculator) -->
<!-- Inheritance allows a new class to adopt all the methods
  and properties of an existing class. You use the extends keyword.
   This saves you from rewriting the same code. -->

<!-- Example: Creating a Scientific Calculator
 We will create a ScientificCalculator that automatically 
 inherits add(), subtract(), and getTotal() from our previous calculator,
  but adds its own advanced features. -->

<?php
// 1. The Base Class (Parent)
class BasicCalc {
    protected $total; // 'protected' allows child classes to access it

    public function __construct($initial = 0) {
        $this->total = $initial;
    }

    public function add($value) {
        $this->total += $value;
        return $this;
    }

    public function getTotal() {
        return $this->total;
    }
}

// 2. The New Class (Child) inheriting from BasicCalc
class ScientificCalc extends BasicCalc {
    
    // New method only available in ScientificCalc
    public function square() {
        $this->total = $this->total * $this->total;
        return $this;
    }

    // New method for square root
    public function squareRoot() {
        $this->total = sqrt($this->total);
        return $this;
    }
}

// --- HOW TO USE IT ---
$sciCalc = new ScientificCalc(4);

// We can use add() (from parent) AND square() (from child) together!
$sciCalc->add(2)->square(); 

echo "Result (4 + 2 squared): " . $sciCalc->getTotal(); 
// Output: 36
?>

<br>
<br>

<!-- ________________New Example______4__________ -->
<?php
class User {
    private $username;
    private $hashedPassword;
    private $isLoggedIn = false;

    // 1. Constructor sets up the basic user profile
    public function __construct($username, $password) {
        $this->username = $username;
        // Hash the password securely before saving it
        $this->hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    }

    // 2. Method to log the user in
    public function login($inputUsername, $inputPassword) {
        // Verify both username and the hashed password
        if ($inputUsername === $this->username && password_verify($inputPassword, $this->hashedPassword)) {
            $this->isLoggedIn = true;
            return true;
        }
        return false;
    }

    // 3. Getter to check the status safely
    public function checkStatus() {
        if ($this->isLoggedIn) {
            return "Welcome back, " . $this->username . "! You are logged in.";
        }
        return "Access denied. Please log in.";
    }
}

// --- HOW IT WORKS ---
// Create a new user account (Registration)
$user1 = new User("john_doe", "mySecurePassword123");

// Attempt to login with the WRONG password
$user1->login("john_doe", "wrongPassword");
echo $user1->checkStatus() . "<br>"; // Output: Access denied. Please log in.

// Attempt to login with the CORRECT password
$user1->login("john_doe", "mySecurePassword123");
echo $user1->checkStatus() . "<br>"; // Output: Welcome back, john_doe! You are logged in.
?>