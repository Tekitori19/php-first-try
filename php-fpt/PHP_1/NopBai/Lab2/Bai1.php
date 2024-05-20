<?php

class Employee {
    public function __construct(
        private string $name = "Unknown",
        private int $age = 0,
        private float $salary = 0,
        private string $department = "Unassigned"
    ) {}

    // Getters
    public function getName(): string {
        return $this->name;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function getSalary(): float {
        return $this->salary;
    }

    public function getDepartment(): string {
        return $this->department;
    }

    // Setters
    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setAge(int $age): void {
        $this->age = $age;
    }

    public function setSalary(float $salary): void {
        $this->salary = $salary;
    }

    public function setDepartment(string $department): void {
        $this->department = $department;
    }

    public function displayInfo(): void {
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . "\n";
        echo "Salary: $" . $this->salary . "\n";
        echo "Department: " . $this->department . "\n";
    }
}

$employee1 = new Employee("Dinh", 21, 50000, "Engineering");
$employee1->displayInfo();

echo "<br>";

$employee2 = new Employee();
$employee2->setName("Tram");
$employee2->setAge(22);
$employee2->setSalary(45000);
$employee2->setDepartment("Marketing");
$employee2->displayInfo();

?>
