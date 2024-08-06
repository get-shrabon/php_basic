<?php
// echo "love code meladsbclciub";

// constant define 
define('PI', 3.14159);
// echo "\n";
$constant = 'Write';
// echo "Value of PI = " . PI;

// printf usecase

$fname = "Hello";
$lname = "World";

// printf("His name is %s %s", $fname, $lname);
echo "\n";
// printf("the decimal to octal number %d = %o", 122, 122);

// sprintf usecase

$n = 'Hello';
$m = 'World';
$output = sprintf("Full Name is %s %s", $n, $m);
// echo $output;
echo "\n";

// ternary oparator

$result = $n == "Hello" ? "This is true" : "This Is false";
// echo $result;

// Switch Case

/*$t = 10;
$r = $t % 2;
switch ($r) {
    case 0:
        echo "{$t} iS Even Number";
        break;

    default:
        echo "{$t} IS ODD NUmber";
}*/

// Multiple Switch Case

$color = "green";
/*switch ($color) {
        /*case 'red';
        echo "{$color} is our favorit Color";
        break;
    case 'green';
        echo "{$color} is our favorit Color"; 

    case 'red':
    case 'green':
        echo ucwords($color) . " Is our favorit color";
        break ;

    default:
        echo "Color is ok";
}*/

$m = "8balls";
switch ($m) {
    case "8balls":
        echo "Eight Balls";
        break;

    case 8:
        echo "8";
        break;

        case "9balls";
        echo "Nine Balls";
        break;

    default:
        echo "Nothing";
}
