<?php

class Human {  // This is Class
    function sayHi() {
        echo "Hii\n";
    }
}

class Cat {
    function sayHi() {
        echo "Meow\n";
    }
}
class Dog {
    function sayHi() {
        echo "Beww\n";
    }
}

$h1 = new Human(); // This is Object on PHP
$h1->sayHi();  // Call sayHi method of Human Class

$h2 = new Cat();
$h2->sayHi();

$h3 = new Dog();
$h3->sayHi();