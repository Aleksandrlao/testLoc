<?php

$array = [1, 2, 3, -4, 5, -6];

$positiveNumbers = getPositiveNumbers($array, function($items) {
    $result = [];
    foreach ( $items as $item ) {
        if( !($item % 2) ) {
            $result[] = $item;
        }
    }
    return $result;
});

function getPositiveNumbers( $array, callable $callback  ) {
    $result = [];

    foreach ( $array as $value ) {
        if( $value > 0 ) {
            $result[] = $value;
        }
    }
    if($callback) {
        $result = call_user_func($callback, $result);
    }
    return $result;
}


var_dump($positiveNumbers);
