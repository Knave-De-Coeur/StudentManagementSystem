<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 08/09/2018
 * Time: 12:43
 */
include "includes/db_connection.php";
include "includes/functions.php";
include "includes/StudentModel.php";
include "includes/AddressModel.php";


if(!isset($_GET['student'])) {
    die("Something Went Wrong");
}

// This will check if we've posted to update so then, the updated values will be outputted
UpdateStudent($_GET['student']);


$studentId = $_GET['student'];

$query = "SELECT * FROM Students Where id = {$studentId}";

$queryTheStudentId = $connection->query($query);

if (!$queryTheStudentId) {
    die("Query Failed " . $connection->error);
}

$student = $queryTheStudentId->fetch_assoc();

$addressQuery = "";

$studentModel = new StudentModel($student['Id'], $student['Name'], $student['Surname'], $student['DateOfBirth'], $student['IDNumber'], $student['Level'])

?>

<h1>Student Details</h1>

<h2>Student Id: <?php echo $student['Id']; ?></h2>

<?php include "includes/student_form.php"; ?>

