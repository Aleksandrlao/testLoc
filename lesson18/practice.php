<?php
/* Task 1 */
class Figure {
    const NUMBER_PARTIES = 4;
    protected $area;
    protected $color;

    function infoAbout() {
        return "Это геометрическая фигура!";
    }
}
class Rectangle extends Figure {
    const NUMBER_PARTIES = 4;
    const FIGURE_NAME = "Прямоугольник";
    private $a;
    private $b;
    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function getArea() {
        return ($this->a * $this->b) * $this::NUMBER_PARTIES/2;
    }
    final public function infoAbout() {
        return "Это клас ".$this::FIGURE_NAME."а. У него ".$this::NUMBER_PARTIES." стороны";
    }
}
class Square extends Figure {
    const NUMBER_PARTIES = 4;
    const FIGURE_NAME = "Квадрат";
    private $a;
    function __construct($a)
    {
        $this->a = $a;
    }
    public function getArea() {
        return $this->a * $this->a;
    }
    final public function infoAbout() {
        return "Это клас ".$this::FIGURE_NAME."а. У него ".$this::NUMBER_PARTIES." стороны";
    }
}
class Triangle extends Figure {
    const NUMBER_PARTIES = 3;
    const FIGURE_NAME = "Треугольник";
    private $a;
    private $b;
    private $c;
    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function getArea() {
        return ($this->a + $this->b + $this->c)/2;
    }
    final public function infoAbout() {
        return "Это клас ".$this::FIGURE_NAME."а. У него ".$this::NUMBER_PARTIES." стороны";
    }

}

/*$rectangleOne = new Rectangle(20, 40);
$rectangleTwo = new Rectangle(30, 60);

$squareOne = new Square(20);
$squareTwo = new Square(30);

$triangleOne = new Triangle(20, 40, 20);
$triangleTwo = new Triangle(30, 60, 10);

echo $rectangleOne->infoAbout().'<br>';
echo $rectangleOne->getArea().'<br>';
echo $rectangleTwo->getArea().'<br>';

echo $squareOne->infoAbout().'<br>';
echo $squareOne->getArea().'<br>';
echo $squareTwo->getArea().'<br>';

echo $triangleOne->infoAbout().'<br>';
echo $triangleOne->getArea().'<br>';
echo $triangleTwo->getArea().'<br>';*/

$figures[] = new Rectangle(30, 40);
$figures[] = new Rectangle(20, 40);
$figures[] = new Square(20);
$figures[] = new Square(20);
$figures[] = new Triangle(20, 40, 20);
$figures[] = new Triangle(30, 60, 10);

foreach ( $figures as $figure ) {
    echo $figure->infoAbout().'<br>';
    echo $figure->getArea().'<br>';
}