<?php 
// ** Classes, objects, methods and properties

// ** The $this keyword
// ** indicates that we use the class's own methods and properties, and allows us to have access to them within the class's scope.
// Create and declare Class
class Car {
    // add properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;
    public $tank;
    private $model = 'N/A';

    public function __construct($model = null)
    {
        // Only if the model value is passed it will be assigned
        if($model) {
            $this -> model = $model;   
        }
    }
    
    // add methods
    public function hello() 
    {
        return "Beep I am a <i>" . $this -> comp . "</i>" . ", and I am " . "<i>" . $this -> color . "</i>";
    }

    // Add gallons of fuel to the tank when we fill it.
    public function fill($float) 
    {
        $this -> tank += $float;
        
        return $this;
    }
    
    // Substract gallons of fuel from the tank as we ride the car.
    public function ride($float) 
    {
        $miles = $float;
        $gallons = $miles / 50;
        $this -> tank -= $gallons;
        
        return $this;
    }

    public function getModel()
    {
        return __CLASS__ . " The car model is {$this -> model}";
    }
}

// ** Declare an inheritance aka child class
//The child class can use the code it inherited from the parent class, 
class SportsCar extends Car {
    private $style = 'fast and furious';
 
    public function driveItWithStyle()
    {
        return 'Drive a '  . $this -> getModel() . ' <i>' . $this -> style . '</i>';
        // return 'Drive a '  . $this -> getModel() . ' <i>' . $this -> style . '</i>';
    }

    // override parent Class's method
    public function hello() 
    {
        return "Brrrrr... <i>" . $this -> comp . "</i>" . ", and I am " . "<i>" . $this -> style . "</i>";
    }

} 

$lambo = new SportsCar('LB-007');
echo $lambo -> getModel();
echo '<br>';
echo $lambo -> hello();
echo '<br>';

// Creat instance objects from a class
$bmw = new Car();
$mercedes = new Car();

// Set the values
$bmw -> comp = "BMW";
$bmw -> color = "blue";
$mercedes -> comp = "Mercedes Benz";
$mercedes -> color = "grey";

echo $bmw -> color;
echo '<br>';
echo $mercedes -> comp;
echo '<br>';

// Use the mothods to get a beep
echo $bmw -> hello();
echo '<br>';
echo $mercedes -> hello();

// Use the chaining methodes and properties
$volvo = new Car();
$tank = $volvo -> fill(10) -> ride(40) -> tank;
echo "The number of gallons left in the tank: " . $tank . " gal.";
echo '<br>';

// Access private property using Setter and Getter
$audi = new Car('Hello-192');
echo $audi -> getModel();
echo '<br>';
