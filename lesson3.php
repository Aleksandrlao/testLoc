<?php

$array = [1, 2, 'name' => 'Alao', 4, 5, 6];
for( $i = 0; $i < count($array); $i++) {

}

foreach( $array as $key => $value ) {
    echo "Key: $key; Value: $value; <br>";
}

$i = 10;
while( $i < 10 ) {
    echo '<p>' . $i . '</p>';
    $i++;
}