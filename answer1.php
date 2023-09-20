<?php


function printEvenNumbersForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . ' ';
    }
}

echo "Using for loop: ";
printEvenNumbersForLoop(2, 20, 2);
echo "\n";




function printEvenNumbersWhileLoop($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        echo $i . ' ';
        $i += $step;
    }
}

echo "Using while loop: ";
printEvenNumbersWhileLoop(2, 20, 2);
echo "\n";


function printEvenNumbersDoWhileLoop($start, $end, $step) {
    $i = $start;
    do {
        echo $i . ' ';
        $i += $step;
    } while ($i <= $end);
}

echo "Using do-while loop: ";
printEvenNumbersDoWhileLoop(2, 20, 2);
echo "\n";




?>