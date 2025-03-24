<?php
class Student {
    public $name;
    public $course;
    public $studentId;

    public function __construct($name, $course, $studentId) {
        $this->name = $name;
        $this->course = $course;
        $this->studentId = $studentId;
    }

    // Magic method runs when cloning the object
    public function __clone() {
        // Generate a new student ID for the cloned student
        $this->studentId = uniqid("STU_");
    }

    public function display() {
        echo "Name: $this->name, Course: $this->course, Student ID: $this->studentId <br>";
    }
}

// Original student object
$student1 = new Student("Alice", "Computer Science", "STU_101");

// Clone the student (generates a new student ID)
$student2 = clone $student1;
$student3 = clone $student1;

// Display details
$student1->display();  // Output: Name: Alice, Course: Computer Science, Student ID: STU_101
$student2->display();  // Output: Name: Alice, Course: Computer Science, Student ID: STU_<unique>
$student3->display();  // Output: Name: Alice, Course: Computer Science, Student ID: STU_<unique>
?>
