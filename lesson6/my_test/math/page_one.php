<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page One</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
</head>
<body>

<form action="/lesson6/my_test/math/page_two.php" method="POST">
    <input type="hidden" name="testId" value="4">
    <input type="hidden" name="questionNumber" value="1">
    <p>2 + 2 = ?</p>
    <input type="text" name="answer">
    <input type="submit" name="send" value="SEND">
</form>

</body>
</html>