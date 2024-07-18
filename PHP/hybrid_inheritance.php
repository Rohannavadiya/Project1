<?php
    class MyMath
    {
        public function getPi()
        {
            return 3.14;
        }
        public function getSquare($number)
        {
            $square = $number * $number;
            return $square;
        }
    }
    class Circle extends MyMath
    {
        public function __construct($radius)
        {
            $this->radius = $radius;

        }
        public function getArea()
        {
            $area = $this->getPi() * $this->getSquare($this->radius);
            return $area;
        }
    }
    class Sphere extends Circle
    {
        public function __construct($radius)
        {
            Circle :: __construct($radius);
        }
        public function getArea()
        {
            $area = 4 * Circle :: getArea();
            return $area;
        }
    }
    class Cylinder extends MyMath
    {
        public function __construct($radius,$height)
        {
            $this->radius = $radius;
            $this->height = $height;
        }
        public function getVolume()
        {
            $volume = $this->getPi() * $this->getSquare($this->radius) * $this->height;
            return $volume;
        }
    }

    $c1 = new Circle(100);
    echo"<br/> Area of circle is ".$c1->getArea();

    $c1 = new Cylinder(100,25);
    echo"<br/> Volume of Cylinder is ".$c1->getVolume();

    $sp1 = new Sphere(10);
    echo"<br/> Volume of Sphere is ".$sp1->getArea();

?>