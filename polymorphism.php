<?php
echo '<h1>Polymorphsim</h1>';

// Practice
abstract class User {
    protected $scores = 0;
    protected $numberOfArticles = 0;

    public function setNumberOfArticles($int) {
        $this -> numberOfArticles = (int)$int;
        // (int) converts a value to an integer.
    }
    public function getNumberOfArticles() {
        return $this -> numberOfArticles;
    }

    // The abstract method.
    abstract public function calcScores();
}


class Author extends User {
    public function calcScores() {
        return $this -> scores = $this -> numberOfArticles * 10 + 20;
    }
}