<?php

class Order {
    public function __construct(
        private string $id,
        private string $orderDate,
        private string $customerName,
        private array $products = []
    ) {}

    public function addProduct(string $productName, float $productPrice): void {
        $this->products[] = ['name' => $productName, 'price' => $productPrice];
    }

    public function getTotalPrice(): float {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product['price'];
        }
        return $total;
    }

    public function getOrderInfo(): void {
        echo "Order ID: " . $this->id . "\n";
        echo "Order Date: " . $this->orderDate . "\n";
        echo "Customer Name: " . $this->customerName . "\n";
        echo "Products:\n";
        foreach ($this->products as $product) {
            echo "  - " . $product['name'] . ": $" . $product['price'] . "\n";
        }
        echo "Total Price: $" . $this->getTotalPrice() . "\n";
    }
}

// Creating an order object with initial products
$order = new Order(
    "FPT123",
    "2024-05-20",
    "Dinh",
    [
        ['name' => 'Laptop', 'price' => 1200],
        ['name' => 'Mouse', 'price' => 50]
    ]
);

$order->addProduct('Keyboard', 100);

$order->getOrderInfo();

?>
