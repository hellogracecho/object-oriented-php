<link rel="stylesheet" href="css/styles.css">
<?php

echo '<h1>Interface</h1>';

// An interface commits its child classes to abstract methods that they should implement.

// Declare & implement an interface 
interface Car {
    public function setModel($name);
    public function getModel();
}

interface Vehicle {
  public function setHasWheels($bool);
  public function getHasWheels();
}

class miniCar implements Car, Vehicle {
    private $model;
    private $hasWheels;
    
    public function setModel($model)
    {
        $this -> model = $model;
    }

    public function getModel()
    {
        return $this -> model;
    }

    public function setHasWheels($bool) 
    {
        $this -> hasWheels = $bool;
    }
    
    public function getHasWheels()
    {
        return $this -> hasWheels ? "has wheels" : "no wheels";
    }
}

$Pony = new miniCar();
$Pony -> setModel("P-10");
echo $Pony -> getModel();
echo '<br/>';
$Pony -> setHasWheels(false);
echo $Pony -> getHasWheels();

echo '<br>';
echo '<hr>';
echo '<br>';


// Practise
class User {
    protected $username;
    
    public function setUsername($username) {
        $this -> username = $username;
    }
   public function getUsername() {
       return $this -> username;
   }
}

interface Author {
    public function setAuthorPrivileges($array); 
    public function getAuthorPrivileges();
}

interface Editor {
    public function setEditorPrivileges($array); 
    public function getEditorPrivileges();
}

// Create a class that extends User and implements interfaces
class AuthorEditor extends User implements Author, Editor {
    private $authorPrivilegesAray = array();
    private $editorPrivilegesAray = array();

    public function setAuthorPrivileges($array) {
        $this -> authorPrivilegesAray = $array;
    } 
    public function getAuthorPrivileges() {
        return $this -> editorPrivilegesAray;
    }
    public function setEditorPrivileges($array) {
        $this -> editorPrivilegesAray = $array;
    } 
    public function getEditorPrivileges() {
        return $this -> editorPrivilegesAray;
    }
}

// Create ab object
$user1 = new AuthorEditor();
$user1 -> setUsername("Bogus");
$user1 -> setAuthorPrivileges(array("write text", "add punctuation"));
$user1 -> setEditorPrivileges(array("edit text", "edit punctuation"));

$userPrivileges = array_merge($user1 -> getAuthorPrivileges(), $user1 -> getEditorPrivileges());
echo $user1 -> getUsername() . " has the following privileges: " . implode(", ", $userPrivileges);