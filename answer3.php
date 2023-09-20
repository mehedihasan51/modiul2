<?php
$first = 0;
$second = 1;
$count = 0;

while ($count < 10) {
    if ($count == 0) {
        echo $first . ' ';
    } else {
        echo $second . ' ';
    }

    $next = $first + $second;
    $first = $second;
    $second = $next;

    if ($next > 100) {
        break; // Exit the loop if Fibonacci number exceeds 100
    }

    $count++;
}
?>
