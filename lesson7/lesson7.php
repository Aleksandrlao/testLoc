<?php

//include "callback.php";

$array = [1, 2, 3, -4, 5, -6];

/*$result = array_filter( $array, function($item, $key) {
    //echo $item.'<br>';
    if( $item > 0 & !($item % 2) ) {
        return true;
    }
}, ARRAY_FILTER_USE_BOTH);
var_dump($result);*/


/*array_walk( $array, function(&$value) {
    $value = $value + 10;
});
var_dump($array);*/


$array = ['Vadim', 'Max']; // Изменить значение каждого элемента массива: ['Hello Vadim', 'Hello Max'];
array_walk( $array, function(&$value) {
    $value = 'Hello '.$value;
});
var_dump($array);


echo '<br>=================================================<br>';

$array = [1, 5, 7, 8, -9, 3]; // Отфильтровать массив: оставить если элемент больше 3-х и нечетный
$result = array_filter( $array, function($item) {
    if( $item > 3 & ($item % 2) ) {
        return true;
    }
});
var_dump($result);