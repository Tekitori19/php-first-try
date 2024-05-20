<?php

namespace Company {

    class Employee {
        private string $employeeId;
        private string $name;
        private float $salary;
        private string $department;
        private float $basicSalary;
        private float $allowance;

        public function __construct(
            string $employeeId = '',
            string $name = '',
            string $department = '',
            float $basicSalary = 0,
            float $allowance = 0
        ) {
            $this->employeeId = $employeeId;
            $this->name = $name;
            $this->department = $department;
            $this->basicSalary = $basicSalary;
            $this->allowance = $allowance;
            $this->salary = $this->calculateSalary();
        }

        // Getters
        public function getEmployeeId(): string {
            return $this->employeeId;
        }

        public function getName(): string {
            return $this->name;
        }

        public function getSalary(): float {
            return $this->salary;
        }

        public function getDepartment(): string {
            return $this->department;
        }

        public function getBasicSalary(): float {
            return $this->basicSalary;
        }

        public function getAllowance(): float {
            return $this->allowance;
        }

        // Setters
        public function setEmployeeId(string $employeeId): void {
            $this->employeeId = $employeeId;
        }

        public function setName(string $name): void {
            $this->name = $name;
        }

        public function setDepartment(string $department): void {
            $this->department = $department;
        }

        public function setBasicSalary(float $basicSalary): void {
            $this->basicSalary = $basicSalary;
        }

        public function setAllowance(float $allowance): void {
            $this->allowance = $allowance;
        }

        public function calculateSalary(): float {
            return $this->basicSalary + $this->allowance;
        }

        public function getInfo(): void {
            echo "Employee ID: " . $this->employeeId . "\n";
            echo "Name: " . $this->name . "\n";
            echo "Department: " . $this->department . "\n";
            echo "Basic Salary: $" . $this->basicSalary . "\n";
            echo "Allowance: $" . $this->allowance . "\n";
            echo "Total Salary: $" . $this->salary . "\n";
        }
    }
}

