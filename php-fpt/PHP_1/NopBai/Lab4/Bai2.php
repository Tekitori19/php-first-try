<?php

interface IPerson {
    public function getName(): string;
    public function getAge(): int;
    public function getInfo(): string;
}

class Student implements IPerson {
    private string $name;
    private int $age;
    private string $studentId;

    public function __construct(string $name, int $age, string $studentId) {
        $this->name = $name;
        $this->age = $age;
        $this->studentId = $studentId;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function getStudentId(): string {
        return $this->studentId;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setAge(int $age): void {
        $this->age = $age;
    }

    public function setStudentId(string $studentId): void {
        $this->studentId = $studentId;
    }

    public function getInfo(): string {
        return "Student Name: {$this->name}, Age: {$this->age}, Student ID: {$this->studentId}";
    }
}

class Teacher implements IPerson {
    private string $name;
    private int $age;
    private string $teacherId;

    public function __construct(string $name, int $age, string $teacherId) {
        $this->name = $name;
        $this->age = $age;
        $this->teacherId = $teacherId;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function getTeacherId(): string {
        return $this->teacherId;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setAge(int $age): void {
        $this->age = $age;
    }

    public function setTeacherId(string $teacherId): void {
        $this->teacherId = $teacherId;
    }

    public function getInfo(): string {
        return "Teacher Name: {$this->name}, Age: {$this->age}, Teacher ID: {$this->teacherId}";
    }
}

$student = new Student("Nguyen Van A", 20, "SV001");
echo $student->getInfo() . "<br>";

echo "<br>";

$teacher = new Teacher("Tran Thi B", 35, "GV001");
echo $teacher->getInfo() . "<br>";

echo "<br>";

$persons = [
    new Student("Nguyen Van C", 21, "SV002"),
    new Student("Le Thi D", 22, "SV003"),
    new Teacher("Pham Van E", 40, "GV002"),
    new Teacher("Bui Thi F", 30, "GV003")
];

function displayPersonsInfo(array $persons): void {
    foreach ($persons as $person) {
        echo $person->getInfo() . "<br>";
    }
}

displayPersonsInfo($persons);

?>
