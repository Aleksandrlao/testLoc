<?php

include 'logics.php';

 ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test two</title>
</head>
<body>

<form action="/lesson6/my_test/math/page_tree.php" method="POST">
    <input type="hidden" name="testId" value="4">
    <input type="hidden" name="questionNumber" value="2">
    <p>7 + 2 = ?</p>
    <input type="text" name="answer">
    <input type="submit" name="send" value="SEND">
</form>

</body>
</html>
