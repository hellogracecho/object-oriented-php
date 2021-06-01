<?php
echo '<h1>Tutorial with Laracasts</h1>';

class Team 
{
    protected $name;
    protected $members = [];

    public function __construct($name, $members = []) 
    {
        $this->name = $name;
        $this->members = $members;
    }

    // ** static Function
    public static function start(...$params) 
    {
        return new static(...$params);
    }

    public function name()
    {
        return $this -> name;
    }

    public function members()
    {
        return $this -> members;
    }

    public function add($name)
    {
        $this -> members[] = $name;
    }
    

    public function cancel()
    {
        # code...
    }
    
    public function manager()
    {
        # code...
    }
}

class Member 
{
    protected $name;

    public function __construct($name) 
    {
        $this -> name = $name;
    }

    public function lastViewed() 
    {

    }
}

// ** static Function calls with "::"
$acme = Team::start('Acme', [
    new Member('John Doe'),
    new Member('Jane Doe')
]);


var_dump($acme->members());
echo '<br/>';
echo '<br/>';


// ** Value Objects and Mutability
class Coordinates 
{
    public $x;
    public $y;
    
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

// These two functions use same Value Objects
function pin(Coordinate $coordinate)
{
    $coordinate->x;
    $coordinate->y;
}

function distance(Coordinate $begin, Coordinate $end)
{
    
}


// ** Exceptions
function add($one, $two)
{
    if ( !is_numeric($two) ) {
        throw new Exception('float only!');
    }
    return $one + $two;
}

try {
    echo add(1,[]);
} catch (Exception $e) {
    echo 'oh well..';
}

echo '<br/>';
echo '<br/>';

class Single 
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Couple
{
    protected $couples = [];

    public function add(Single $single)
    {
        if ( count($this->couples) === 2) {
            throw new Exception('You may not add more than 2 team members');
        }
        $this->couples[] = $single;
    }

    public function getCouples()
    {
        return $this->couples;
    }
}

class CoupleMemberController
{
    public function store()
    {
        $dynamicDuo = new Couple; // has a max 2
        
        $dynamicDuo->add(new Single('Gaeko'));
        $dynamicDuo->add(new Single('Choiza'));
        $dynamicDuo->add(new Single('Zooo'));
        
        var_dump($dynamicDuo->getCouples());
    }
}


(new CoupleMemberController())->store();