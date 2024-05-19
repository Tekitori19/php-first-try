<?php
require './Bai3.1.php';
use Company\Employee;

// Creating an employee using the parameterized constructor
$employee1 = new Employee(
    "FPT123",
    "Dinh",
    "Engineering",
    3000,
    500
);
$employee1->getInfo();

echo "<br>";

$employee2 = new Employee();
$employee2->setEmployeeId("FPT113");
$employee2->setName("Tram");
$employee2->setDepartment("Marketing");
$employee2->setBasicSalary(3500);
$employee2->setAllowance(600);
$employee2->getInfo();
