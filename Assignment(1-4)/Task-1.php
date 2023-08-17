<?php 
class Shape {
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

class Circle extends Shape {
    protected $radius;

    public function __construct($name, $radius){
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function getRadius(){
        return $this->radius;
    }

    public function Area(){
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    protected $width;
    protected $height;

    public function __construct($name, $width, $height){
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth(){
        return $this->width;
    }

    public function getHeight(){
        return $this->height;
    }

    public function Area(){
        return $this->width * $this->height;
    }
}

$circle = new Circle("Circle", 5);
echo "Name: " . $circle->getName() . "<br>";
echo "Radius: " . $circle->getRadius() . "<br>";
echo "Area: " . $circle->Area() . "<br>";

echo "<br>";

$rectangle = new Rectangle("Rectangle", 5, 10);
echo "Name: " . $rectangle->getName() . "<br>";
echo "Width: " . $rectangle->getWidth() . "<br>";
echo "Height: " . $rectangle->getHeight() . "<br>";
echo "Area: " . $rectangle->Area() . "<br>";
