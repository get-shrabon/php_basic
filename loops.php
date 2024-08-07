<?php

/**
 * For Loop
 * While Loop
 * Do Loop
 * Go To
 */

//  For Loop
for ($i = 0; $i <= 20; $i++) {
    // echo "{$i} ". "\n";
}
// While Loop
$a = 0;
while ($a < 10) {
    $a++;
    // echo "{$a}". "\n";
}

// Do Loop
$b = 0;
do {
    $b++;
    // echo "{$b}" . "\n";
} while ($b < 10);

// Go To
$n = 0;
a:
$n++;
// echo "{$n}\n";
if ($n < 10) goto a;

// For loop multiple Steping

for ($i = 10, $j = 1; $i > 0; $i--, $j++) {
    // echo "{$i}" . " " . ":" . " " . "{$j}";
    // echo "\n";
}


// Loop Break with conditionally

for ($i = 0; $i < 10; $i++) {
    echo "{$i} Value \n ----";
    if ($i == 6) {
        break;
    }
}
