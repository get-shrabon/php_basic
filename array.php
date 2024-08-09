<?php
// Declare array in php
$names = array(
    "Shrabon",
    "Akash",
    "Atiq",
    "Mihir",
    "Asad",
);
$namesLength = count($names);
for ($i = 0; $i < $namesLength; $i++) {
    // echo $names[$i] . "\n";
}


$teachers = ["hoihoi", "roiroi", "koikoi", "moimoi"];
$teachersLenght = count($teachers);
for ($i = 0; $i < $teachersLenght; $i++) {
    // echo $teachers[$i] . "\n";
}


// Array Methods

/**
 * array_shift()   ...remove the array first item
 * array_unshift() ...add new item at start index
 * array_push()    ...add new item at last index
 * array_pop()     ...remove the array last item
 */

$fNames = array("jamal", "kamal", "rahim");

array_push($fNames, "karim");
array_unshift($fNames, "halim");
array_pop($fNames);
array_shift($fNames);

$fnamesL = count($fNames);
for ($i = 0; $i < $fnamesL; $i++) {
    //    echo $fNames[$i] . "\n";
}


// ================ Associative array ====================

$students = [
    '1' => 'Jalal',
    '2' => 'Halal',
    '3' => 'Karim',
    '4' => 'Rahim',
];

// Catch Halal Miya

// echo $students['2'];

$foods = [
    'vagetables' => 'carrot, tomato, potato',
    'drinks' => 'milk, water, cokakola',
    'fruits' => 'banana, appale, orange',
];

// How to access the foods array all item with loop?
// Use foreach loop

foreach($foods as $key=>$value){
    // echo $key . "=" . $value;
}

// ================== String to covert array with built in function explode() ==================

$foodNames = explode(", ", "nodouls, tea, rice, briryani"); 
// var_dump($foodNames);
// echo $foodNames[2];
