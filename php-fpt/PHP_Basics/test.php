<?php
session_start();

class Cart {
    public $items = array();

    public function addItem($id, $name, $price, $quantity) {
        if(isset($this->items[$id])) {
            $this->items[$id]['quantity'] += $quantity;
        } else {
            $this->items[$id] = array('name' => $name, 'price' => $price, 'quantity' => $quantity);
        }
    }

    public function updateQuantity($id, $quantity) {
        if(isset($this->items[$id])) {
            $this->items[$id]['quantity'] = $quantity;
        }
    }

    public function removeItem($id) {
        unset($this->items[$id]);
    }

    public function getTotal() {
        $total = 0;
        foreach($this->items as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    }

    public function displayCart() {
        echo "<h2>Your Cart</h2>";
        if(empty($this->items)) {
            echo "Your cart is empty.";
        } else {
            echo "<ul>";
            foreach($this->items as $id => $item) {
                echo "<li>{$item['name']} - \${$item['price']} x {$item['quantity']} <a href='remove.php?id=$id'>Remove</a></li>";

            }
            echo "</ul>";
            echo "<p>Total: \${$this->getTotal()}</p>";
        }
    }
}

// Sử dụng
$cart = new Cart();

// Thêm sản phẩm vào giỏ hàng
$cart->addItem(1, 'Product 1', 10, 2);
$cart->addItem(2, 'Product 2', 20, 1);

// Cập nhật số lượng sản phẩm
$cart->updateQuantity(1, 3);

// Hiển thị giỏ hàng
$cart->displayCart();

