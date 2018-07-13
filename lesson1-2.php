<?php

$alao = 'Alexandr';
echo "Hello, $alao?";
echo 'How are you, '.$alao.'?';

$newalao = 'Hello';

$a = 1; // int
$b = 1.1; // float/double
$c = 'Alao'; // string
$d = true; // boolean
$e = NULL;
$array = array($a, $b, 'name' => $c, $d);

echo '<pre>';
var_dump($array);
echo $array['name'];
echo '<pre>';



$a = 3;
$b = 2;


echo 'Сложение:'.($a + $b).'</br>';
echo 'Вычитание:'.($a - $b).'</br>';
echo 'Умножение:'.($a * $b).'</br>';
echo 'Деление'.($a / $b).'</br>';
echo 'Деление по модулю'.($a % $b).'</br>';
echo 'Возведение в степень'.($a * $b).'</br>';
echo 'Преинкремент'.(++$a).'</br>';
echo 'Постинкремент'.($a++).'</br>';
echo 'Постинкремент'.($a++).'</br>';


const PRICE = '$33.3';
var_dump(PRICE);

define('FOO', 'что-то');

unset($a);