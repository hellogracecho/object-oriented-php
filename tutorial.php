<?php 
// ** Classes, objects, methods and properties

// Create and declare Class
class Car {
    // add properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;

    // add methods
    public function hello() {
        return "beep";
    }
}

// Creat an instance from a class
$bmw = new Car();
$mercedes = new Car();

// Set the values
$bmw -> color = 'blue';
$mercedes -> comp = 'Mercedes Benz';

echo $bmw -> color;
echo '<br>';
echo $mercedes -> comp;
echo '<br>';

// Use the mothods to get a beep
echo $bmw -> hello();
echo '<br>';
echo $mercedes -> hello();


// ** The $this keyword
