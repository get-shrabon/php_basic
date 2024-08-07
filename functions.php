<?php

// Even or Odd Check Function

function isEven($n)
{
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}


// Function Peramiter With Default Value

function serve($sItem = "1 cup", $sBrand = "Coffee")
{
    echo "{$sBrand} has/have {$sItem} Served";
}

// Unlimited Arguments Accept an function

function sum(int ...$numbers): int
{
    $result = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $result += $numbers[$i];
    }
    return $result;
}

// echo sum(1,2,3,4,5,6,7);

// Recursive Function

function printNumber($counter, $end, $step=1){
    if($counter >= $end){
        return;
    }
    $counter += $step;
    echo "{$counter} \n";
    printNumber($counter, $end, $step);
}
printNumber(2, 30, 3);