<?php
if(isset($_POST['send'])) {
    $requstData = [
        'name' => $_POST['name'],
        'mess' => $_POST['mess']
    ];
    $data[] = $requstData;

    var_dump($data); //die;

    $filePath = 'lesson8/counter.txt';

    $fileData = file_get_contents($filePath);

    var_dump(unserialize($fileData));


   /* $fp = fopen('lesson8/counter.txt', 'a');

    //$myText = 'Append this stirng';

    $test = fwrite($fp, serialize($data));
/*    if($test) {
        echo $test;
    } else {
        echo 0;
    }
    fclose($fp);
    header('Location: ' . 'http://'. $_SERVER['HTTP_HOST'] . '/lesson8/');
    //var_dump($_POST); die;*/
}

/*$myfile = fopen('lesson8/counter.txt', 'r');
$message = fread($myfile, filesize('lesson8/counter.txt'));
fclose($myfile);


$arrayMessages = unserialize($message);
//var_dump($arrayMessages);

echo '<p> Name:' . $arrayMessages['name'] . ', Message:' . $arrayMessages['mess'].'</p>';*/


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lesson8</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
</head>
<body>

<form action="<?php echo 'http://'. $_SERVER['HTTP_HOST'] . '/lesson8/'; ?>" method="POST">
    <p>Name: <input type="text" name="name" placeholder="Name"></p>
    <p>Message: <textarea name="mess" placeholder="Message"></textarea></p>
    <input type="submit" name="send" value="send">
</form>

</body>
</html>