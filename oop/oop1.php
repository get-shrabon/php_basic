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
// echo $r1;
echo "\n";

// $g2 = new Frutes;
// $g2->set_name("Lemon");
// $r2 = $g2->get_name();
// echo $r2;





class Oop1
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
}

$O1 = new Oop1("Object Oriented Programm");
// echo $O1->getName();



class Hajira
{
    public $hName;
    public $hAge;

    function __construct($name, $age = 0)
    {
        $this->hName = $name;
        $this->hAge = $age;
    }

    function result()
    {
        if ($this->hAge) {

            echo "My name is {$this->hName}\n , I am {$this->hAge} years old";
        } else {
            echo "My name is {$this->hName}\n , I don't know how years old me!!";
        }
    }
}
$hajira1 = new Hajira("Akash", 26);
$hajira1->result();

$hajira2 = new Hajira("SHRABON");
$hajira2->result();

