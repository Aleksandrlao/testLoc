<?php
$host = 'localhost';
$db   = 'beetroot_student';
$user = 'root';
$pass = '';
$charset = 'utf8';


try {
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION
    ];

    $pdo = new PDO($dsn, $user, $pass, $opt);

} catch (Exception $e) {
	die ('disconnect ' . $e->getMessage());
}

$stmt = $pdo->query('SELECT * FROM university');

while ($row = $stmt->fetch()) {
    echo $row['name'] . ' - ' . $row['description'] . '<br>';
}


function university($id, $name, $description) {
    return "{$name} - {$description}";
}


$result = $stmt->fetchAll(PDO::FETCH_FUNC, "university");
echo '<pre>';
print_r($result[1]);
echo '</pre>';



$sql = $pdo->query("SELECT * FROM student");
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($result);
echo '</pre>';

