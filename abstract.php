<?php
echo '<h1>Abstract</h1>';

// Abstract classes are declared with the abstract keyword, and contain abstract methods.
// ** cannot creat objects from abstract classes so needs to create child classes
abstract class Car {
    // Abstract classes can have properties
    protected $tankVolume;
 
    // Abstract classes can have non abstract methods
    public function setTankVolume($volume)
    {
        $this -> tankVolume = $volume;
    }

    // Abstract method
    abstract public function calcNumMilesOnFullTank();
}

// Create child classes from an abstract class
class Honda extends Car {
    // ** The child classes that inherit from abstract classes must add bodies to the abstract methods.
    public function calcNumMilesOnFullTank()
    {
        $miles = $this -> tankVolume*30;
        return $miles;
    }
}
class Toyota extends Car {
    public function calcNumMilesOnFullTank()
    {
        return $miles = $this -> tankVolume*33;
    }

    // its own method
    public function getColor()
    {
        return "beige";
    }
}

$toyota1 = new Toyota();
$toyota1 -> setTankVolume(10);
echo $toyota1 -> calcNumMilesOnFullTank();
echo '<br>';
echo $toyota1 -> getColor();

echo '<br>';
echo '<hr>';
echo '<br>';


// Practice
abstract class User {
    protected $username;
    
    public function setUsername($username) {
        $this -> username = $username;
    }
    
    public function getUsername() {
        return $this -> username;
    }
    
    abstract public function stateYourRole();
}

class Admin extends User {
     public function stateYourRole(){
        return "admin";
    }
}

class Viewer extends User {
     public function stateYourRole(){
        return strtolower(__CLASS__);
    }
}

$Balthazar = new Admin();
echo $Balthazar -> stateYourRole();