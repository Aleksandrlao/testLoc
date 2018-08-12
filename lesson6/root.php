<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
if( isset($_POST['send']) ) {
    echo '<pre>';
    var_dump($_POST);

    $newFilename = $_SERVER['DOCUMENT_ROOT']. '/lesson6/temp/' . basename($_FILES['photo']['name']);
    $uploadInfo = $_FILES['photo'];


    //Перемещаем файл из временной папки в указанную
    if (!move_uploaded_file($uploadInfo['tmp_name'], $newFilename)) {
        echo 'Не удалось осуществить сохранение файла';
    } else {
        echo 'Переместил';
    }

    var_dump($_FILES);
    echo '</pre>';
}

?>

<div class="container">
<form action="/lesson6/root.php" method="POST" enctype="multipart/form-data">

    <p><label for="name">Name: <input type="text" id="name" name="name" value="Alao"></label></p>
    <p><label for="name">Email: <input type="email" name="mail" value="aleksandrlao@mail.ru"></label></p>
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
    <p><label for="name">Photo: <input type="file" name="photo"></label></p>
    <hr>
    <input type="submit" name="send" value="Отправить">

</form>
</div>

</body>
</html>