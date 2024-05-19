<?php

class Person {
    public function __construct(
        public string $name,
        public int $age,
        public string $address
    ) {}

    public function getInfo() {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'address' => $this->address,
        ];
    }

    public function canVote() {
        return $this->age >= 18;
    }
}

$dinh = new Person("Dinh", 18, 'DN');

print_r($dinh->getInfo());
echo "<br>";
var_dump($dinh->canVote());