<?php

interface IUser {
    const MAX_AGE = 100;
    public function getUserInfo();
    public function sayHello();
}


interface IContact {
    function getContact();
}


abstract class User implements IUser, IContact {
    //const MAX_AGE = 100;
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

    final public function getUserInfo() {
        return 'Меня зовут '.$this->name.', мне '.$this->age.' годика';
    }


}

class Student extends User {

    function __construct($name = "User", $age = '22', $mail, $cash){
        parent::__construct($name, $age, $mail);
        $this->cash = $cash;
    }

    function getStudentInfo() {
        $userInfo = $this->getUserInfo();
    }

    function getContact()
    {
        // TODO: Implement getContact() method.
    }
    function sayHello()
    {
        return 'Я студент:'. $this->name. '.Мне '. $this->age;
    }



}

class Teacher extends User {

    function __construct($name = "User", $age = '22', $mail, $cash){
        parent::__construct($name, $age, $mail);
        $this->cash = $cash;
    }

    function getStudentInfo() {
        $userInfo = $this->getUserInfo();
    }
    function getContact()
    {
        // TODO: Implement getContact() method.
    }
    function sayHello()
    {
        return 'Я учитель:'. $this->name. '.Мне '. $this->age;

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

$users[] = new Student('Alao', 29, 'alao456@gmail.com', '999');
$users[] = new Teacher('Vadim', 25, 'alao456@gmail.com', '8999');

foreach ( $users as $user ) {
    echo $user->sayHello().'<br>';
}






echo '<pre>';

echo '</pre>';







die;
