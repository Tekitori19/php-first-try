<?php

class Product {
    protected int $id;
    protected string $name;
    protected float $price;

    public function __construct(int $id, string $name, float $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): float {
        return $this->price;
    }

    // Setters
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }

    public function displayInfo(): void {
        echo "Product ID: " . $this->id . "<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Price: $" . $this->price . "<br>";
    }
}

class ElectronicProduct extends Product {
    private int $warrantyPeriod;

    public function __construct(int $id, string $name, float $price, int $warrantyPeriod) {
        parent::__construct($id, $name, $price);
        $this->warrantyPeriod = $warrantyPeriod;
    }

    public function getWarrantyPeriod(): int {
        return $this->warrantyPeriod;
    }

    public function setWarrantyPeriod(int $warrantyPeriod): void {
        $this->warrantyPeriod = $warrantyPeriod;
    }

    public function displayInfo(): void {
        parent::displayInfo();
        echo "Warranty Period: " . $this->warrantyPeriod . " months<br>";
    }
}

class ClothingProduct extends Product {
    private string $size;

    public function __construct(int $id, string $name, float $price, string $size) {
        parent::__construct($id, $name, $price);
        $this->size = $size;
    }

    public function getSize(): string {
        return $this->size;
    }

    public function setSize(string $size): void {
        $this->size = $size;
    }

    public function displayInfo(): void {
        parent::displayInfo();
        echo "Size: " . $this->size . "\n";
    }
}

$electronicProduct = new ElectronicProduct(1, "Laptop", 1200.99, 24);
$electronicProduct->displayInfo();

echo "<br>";

$clothingProduct = new ClothingProduct(2, "T-Shirt", 19.99, "L");
$clothingProduct->displayInfo();

?>
