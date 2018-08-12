<?php

include('../components/db.php');

$dbConnection = getConnection();
//var_dump($dbConnection);

$universityAll = $dbConnection->query("SELECT * FROM university");



if (isset($_POST['send'])) {
    $success = true;
    $stmt = $dbConnection->prepare("INSERT 
      INTO student (`name`, `age`, `university_id`) 
      VALUES (:name, :age, :university_id);");
    $stmt -> execute(array(
        'name' => $_POST['name'],
        'age' => $_POST['age'],
         'university_id' => $_POST['university_id']
    ));

    if( $stmt ) {
        $message = 'Пользователь '.$_POST['name'].' добавлен';
    } else {
        $message = 'Ошибка добавления пользователя';
        $success = false;
    }

    header("Location: work.php?success=$success&message=$message");

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson15</title>
</head>
<body>

<p><?php
    if(isset($_GET['success']) && $_GET['success'] != false ) {
        echo $_GET['message'];
        $_GET['success'] = false;
    } else {
        echo "Добавьте нового пользователя:";
    }
?></p>

<form action="/lesson15/work.php" method="POST">
    <p>Имя студента: <input type="text" name="name"></p>
    <p>Возраст: <input type="text" name="age"></p>
    <p>ВУЗ:
        <select name="university_id">
            <?php foreach ($universityAll as $item) {
                echo '<option value="'.$item['id'].'">'.$item['name'].'</option>';
            } ?>
        </select></p>
    <input type="submit" name="send" value="Отправить">
</form>


</body>
</html>

