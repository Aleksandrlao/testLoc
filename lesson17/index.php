<?php


class User {
    const MAX_AGE = 100;
    protected $name;
    protected $age;
    private $mail;

    function __construct($name = "User", $age = '22', $mail){
        $this->name = $name;
        $this->age = $age;
        $this->mail = $mail;

    }

    /*private static $classDescription = 'Этот класс для работы с User';



    public static function getClassDescription() {
        return self::$classDescription . ' Кому меньше ' . self::MAX_AGE;
    }

    function __destruct(){
        echo 'Объект был уничтожен';
    }



    public function getMail(){
        return $this->mail;
    }

    public function setMail($mail){
        $this->mail = $mail;
    }
    */

    public function getUserInfo() {
        return 'Меня зовут '.$this->name.', мне '.$this->age.' годика';
    }




}

class Student extends User {
    private $cash;

    function __construct($name = "User", $age = '22', $mail, $cash){
        parent::__construct($name, $age, $mail);
        $this->cash = $cash;
    }

    function getStudentInfo() {
        $userInfo = parent::getUserInfo();
        return $userInfo.'. Денежка: '.$this->cash;
    }

}

/*
$userOne = new User('Alao', 29, 'alao456@gmail.com');
$userTwo = new User('Sasha', 29, 'aleksandrlao@mail.ru');

echo $userOne->getUserInfo();
echo '<br>';
echo 'Второго студента зовут: '.$userTwo->getUserInfo();
echo '<br>';
echo User::getClassDescription();

$userOne->setMail("wow@mail.ru");
*/

$studentOne = new Student('Alao', 29, 'alao456@gmail.com', '999');

echo $studentOne->getStudentInfo();






echo '<pre>';
var_dump($studentOne);
echo '</pre>';







die;
