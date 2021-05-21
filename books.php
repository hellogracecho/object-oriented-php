<?php
class Book {
    public $title;
    public $year;
    public static $count = 0;

    public function __construct($title = '', $year = '1908')
    {
        self::increment();
        $this->title = $title;
        $this->year = $year;
    }

    public function getHeading () {
        return $this->title . ' - ' . $this->year;
    }

    public static function increment () {
        self::$count++;
    }
}

// OOP Inheritance
class TravelBook extends Book {
    public $place = '';
  
    public function getHeading () {
        return $this->title . ' - ' . $this->year . ' - ' . $this->place;
    }
}


$book = new Book();
$book->title = 'new title 1';
var_dump($book->getHeading());

echo '<br>';

$travel1 = new TravelBook('new title 2',);
// $travel1->title = 'new title 2';
// $travel1->year = '2028';
$travel1->place = 'Victoria';
var_dump($travel1->getHeading());

echo '<br>';

$travel2 = new TravelBook('new title 3',500);
$travel2->place = 'Nanaimo';
var_dump($travel2->getHeading());


echo '<br>';
echo Book::$count;