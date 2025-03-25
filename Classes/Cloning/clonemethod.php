<?php
class Student {
   
    public $course;
    public $studentId;

    public function __construct( $course, $studentId) {
      
        $this->course = $course;
        $this->studentId = $studentId;
    }

    // Magic method runs when cloning the object
    public function __clone() {
        // Generate a new student ID for the cloned student
        $this->studentId = uniqid("STU_");
    }

    public function display() {
       echo<<<END
        The course is $this->course <br>
        and studentId is $this->studentId <br><br>
       END;
    }
}

// Original student object
$student1 = new Student( "Computer Science",uniqid("STU_") );

// Clone the student (generates a new student ID)
$student2 = clone $student1;
$student3 = clone $student1;

// Display details
$student1->display();  // Output: Name: Alice, Course: Computer Science, Student ID: STU_101
$student2->display();  // Output: Name: Alice, Course: Computer Science, Student ID: STU_<unique>
$student3->display();  // Output: Name: Alice, Course: Computer Science, Student ID: STU_<unique>
?>
