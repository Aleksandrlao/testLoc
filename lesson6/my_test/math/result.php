<?php

include 'logics.php';


$correctAnswer = [4, 9, 12];
if( $correctAnswer[0] == $_SESSION['answerOne']
    && $correctAnswer[1] == $_SESSION['answerTwo']
    && $correctAnswer[2] == $_SESSION['answerTree']) {
    echo 'Тест пройден';
} else {
    echo 'Тест не пройден';
}


echo '<a href="/lesson6/my_test">Назад</a>';









?>