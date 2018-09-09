<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 08/09/2018
 * Time: 12:43
 */
include "includes/header.php";
include "includes/StudentModel.php";
include "includes/AddressModel.php";


if(!isset($_GET['student'])) {
    die("Something Went Wrong");
}

// This will check if we've posted to update so then, the updated values will be outputted
UpdateStudent($_GET['student']);

// model for page
$studentModel = GetStudentByID($_GET['student']);

?>

<h1>Student Details</h1>

<h2>Student Id: <?php echo $studentModel->getId(); ?></h2>

<?php include "includes/student_form.php"; ?>

<?php include "includes/footer.php"; ?>