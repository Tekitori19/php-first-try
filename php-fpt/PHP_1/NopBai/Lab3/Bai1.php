<?php

class Employee {
    protected int $id;
    protected string $name;
    protected float $salary;

    public function __construct(int $id, string $name, float $salary) {
        $this->id = $id;
        $this->name = $name;
        $this->salary = $salary;
    }

    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSalary(): float {
        return $this->salary;
    }

    // Setters
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setSalary(float $salary): void {
        $this->salary = $salary;
    }

    public function calculateSalary(): float {
        return $this->salary;
    }
}

class Manager extends Employee {
    private float $bonus;

    public function __construct(int $id, string $name, float $salary, float $bonus) {
        parent::__construct($id, $name, $salary);
        $this->bonus = $bonus;
    }

    public function getBonus(): float {
        return $this->bonus;
    }

    public function setBonus(float $bonus): void {
        $this->bonus = $bonus;
    }

    public function calculateSalary(): float {
        return $this->salary + $this->bonus;
    }
}

$employee = new Employee(1, "Dinh", 3000);
echo "Employee Salary: $" . $employee->calculateSalary() . "<br>";

$manager = new Manager(2, "Tram", 5000, 1500);
echo "Manager Salary: $" . $manager->calculateSalary() . "<br>";

?>
