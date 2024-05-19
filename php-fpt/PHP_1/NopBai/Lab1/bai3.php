<?php

class Rectangle {
    public function __construct(
        public float $length,
        public float $width
    ) {}

    public function getArea() {
        return $this->length * $this->width;
    }

    public function getPerimeter() {
        return ($this->length + $this->width) * 2;
    }

    public function drawRectangle() {
        echo "<div style=\"width: {$this->width}px;height: {$this->length}px; background-color: red\"></div>";   
    }
}

$rec = new Rectangle(200, 300);

$rec->drawRectangle();
?>