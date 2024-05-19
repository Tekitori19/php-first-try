<?php

class Product {
    public function __construct(
        public string $name,
        public float $price,
        public int $quantity
    ) {}

    public function getInfo() {
        return [
            'name' => $this->name,
            'price' => $this->price,
            'quantity' => $this->quantity,
        ];
    }

    public function calculateTotal() {
        return $this->price * $this->quantity;
    }
}

$dog = new Product('Nguyen Quang Hieu', 300, 2);

print_r($dog->getInfo());
echo "<br>";
var_dump($dog->calculateTotal());