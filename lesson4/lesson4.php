<?php

$num = 5;
$degree = 2;

//$result = $num ** $degree;
$result = pow($num, $degree);
echo $result . '<br>';

function myPow( $num, $degree ) {
    $result = pow($num, $degree);
    return $result;
}

echo myPow(5, 3);