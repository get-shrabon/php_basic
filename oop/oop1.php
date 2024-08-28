<?php

class Human
{  // This is Class
    function sayHi()
    {
        echo "Hii\n";
    }
}

class Cat
{
    function sayHi()
    {
        echo "Meow\n";
    }
}
class Dog
{
    function sayHi()
    {
        echo "Beww\n";
    }
}

$h1 = new Human(); // This is Object on PHP
// $h1->sayHi();  // Call sayHi method of Human Class

$h2 = new Cat();
// $h2->sayHi();

$h3 = new Dog();
// $h3->sayHi();


class Frutes
{
    // Propertise
    public $name;

    // Methods
    function __construct($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
}

$g1 = new Frutes("Banana");
// $g1->set_name("Apple");
$r1 = $g1->get_name();
echo $r1;
echo "\n";

// $g2 = new Frutes;
// $g2->set_name("Lemon");
// $r2 = $g2->get_name();
// echo $r2;