<?php

$host = 'localhost';
$db   = 'beetroot_student';
$user = 'root';
$pass = '';
$charset = 'utf8';

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    $pdo = new PDO($dsn, $user, $pass, $opt);

} catch (Exception $e) {
    die ('disconnect ' . $e->getMessage());
}

// Выбрать студентов из вуза (1) у которых возраст > 24
$stmt = $pdo->prepare("SELECT * FROM student WHERE university_id = ? AND age > ?");
$stmt -> execute(array('1', '24'));
//var_dump($stmt);
foreach ($stmt as $row) {
    echo $row['name'] . '<br>';
}

echo '<br>=================================================<br>';

$stmt = $pdo->prepare("SELECT * FROM student WHERE university_id = :university_id AND age > :age");
$stmt -> execute(array(':university_id'=>'1', ':age'=>'24'));
//var_dump($stmt);
foreach ($stmt as $row) {
    echo $row['name'] . ' - ' . $row['age'] . '<br>';
}

echo '<br>=================================================<br>';

$stmt = $pdo->prepare("SELECT * FROM student WHERE university_id = :university_id AND age > :age");
$stmt->bindParam(':university_id', $universityId);
$stmt->bindParam(':age', $age);
$universityId = '1';
$age = '24';
$stmt -> execute();
//var_dump($stmt);
foreach ($stmt as $row) {
    echo $row['name'] . ' - ' . $row['age'] . '<br>';
}

$universityId = '2';
$age = '24';
$stmt -> execute();
//var_dump($stmt);
foreach ($stmt as $row) {
    echo $row['name'] . ' - ' . $row['age'] . '<br>';
}