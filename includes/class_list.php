<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 09/09/2018
 * Time: 21:36
 */
include "ClassModel.php";
?>

<h2>Student's Classes</h2>


<?php

$studentId = $studentModel->getId();

$query = "SELECT student_class_mapper.DisplayOrder, class.Id, class.Room, class.Faculty, class.ShortDescription, class.FullDescription, class.Lecturer 
FROM student_class_mapper INNER JOIN class ON student_class_mapper.classId = class.Id 
WHERE student_class_mapper.StudentId = {$studentId} 
ORDER BY student_class_mapper.DisplayOrder; ";

$queryStudentClasses = $connection->query($query);

if(!$queryStudentClasses) {
    die("Query studentClasses failed " . $connection->error);
}

$classNumber = 0;

while($row = $queryStudentClasses->fetch_assoc()) {
    $classNumber++;
    $class = new ClassModel($row['Id'], $row['Room'], $row['Faculty'], $row['ShortDescription'], $row['FullDescription'], $row['Lecturer']);
    $displayOrder = $row['DisplayOrder'];
    ?>

    <div>
        <h3>Class: <?php echo $classNumber; ?></h3>
        <div class="property"><strong>Room Name/ Number:</strong><?php echo $class->getRoom(); ?></div>
        <div class="property"><strong>Faculty: </strong><?php echo $class->getFaculty(); ?></div>
        <div class="property"><strong>Overview: </strong><?php echo $class->getShortDescription(); ?></div>
        <div class="property"><strong>Lecturer: </strong><?php echo $class->getLecturer(); ?></div>
        <a href="Class.php?id=<?php echo $class->getId(); ?>">View Class Details</a>
        <a href="remove_student_class.php?studentclass=<?php echo $class->getId(); ?>">Remove from class</a>
    </div>

    <?php
}

?>