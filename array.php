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

foreach ($foods as $key => $value) {
    // echo $key . "=" . $value;
}

// ================== String to covert array with built in function explode() ==================

$foodNames = explode(", ", "nodouls, tea, rice, briryani");
// var_dump($foodNames);
// echo $foodNames[2];


// ============= Associative Array to convert json data in PHP ============

$asHuman = [
    'fname' => "Akash",
    'lname' => "Sahal",
    'profession' => 'Developer',
    'age' => 26,
    'status' => 'mingle'
];

$akashJson = json_encode($asHuman);

// echo $akashJson;


// >>>>>>>> Remove data an Associative Array with unset() built-in function

$hePerson = ['fname' => 'Kuddus', 'lname' => 'Ali'];
// print_r($hePerson);
unset($hePerson['lname']); // removed the lname key and value
// print_r($hePerson);


// >>>>>>>>>>>> Array slice

$fruits = ['mango', 'banana', 'orange', 'jackfruit', 'apple'];
$someFruits = array_slice($fruits, 2, 3);
$negFruits = array_slice($fruits, 2, -1);
// print_r($someFruits) ;
// print_r($negFruits) ;

// >>>>>>>>>>>> Array splice
$newFruits = ["Maranda", "Grape","Pineapple"];
$someFruit = array_splice($fruits, 1, 2, $newFruits);
// print_r($someFruit);
// print_r($fruits);

// >>>>>>>>>>>>>> Array merge
$r1 = [22,33,55,66];
$r2 = [43,55,33,22];
$merge = array_merge($fruits, $r1,$r2);
// print_r($merge);

// >>>>>>>>>>>>> PHP sort
sort($merge);
// print_r($merge);