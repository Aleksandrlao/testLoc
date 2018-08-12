<?php

// explode
// Пример 1
$ingredient = "огурец, помидор, колбаска, сыворотка, яйцо";
$okroshka = explode(", ", $ingredient);
echo '<pre>';
var_dump($okroshka);
echo '</pre><br>';

$whatBuy = implode( ', ', $okroshka );
echo '<pre>';
var_dump($whatBuy);
echo '</pre><br>';


// Пример 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; // *


$trimString = trim( "     1       " );
echo $trimString . '<br>';

$str = 'password';
echo md5(md5($str));

$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
echo '<br>' . $onlyconsonants = str_replace($vowels, "", "Hello World of PHP");
