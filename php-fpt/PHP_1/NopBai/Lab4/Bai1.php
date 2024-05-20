<?php

interface IShape {
    public function calculateArea(): float;
    public function calculatePerimeter(): float;
}

class Circle implements IShape {
    public float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function calculateArea(): float {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(): float {
        return 2 * pi() * $this->radius;
    }
}

class Rectangle implements IShape {
    public float $length;
    public float $width;

    public function __construct(float $length, float $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea(): float {
        return $this->length * $this->width;
    }

    public function calculatePerimeter(): float {
        return 2 * ($this->length + $this->width);
    }
}

$circle = new Circle(5.0);
echo "Circle Area: " . $circle->calculateArea() . "<br>";
echo "Circle Perimeter: " . $circle->calculatePerimeter() . "<br>";

echo "<br>";

$rectangle = new Rectangle(4.0, 6.0);
echo "Rectangle Area: " . $rectangle->calculateArea() . "<br>";
echo "Rectangle Perimeter: " . $rectangle->calculatePerimeter() . "<br>";

?>
