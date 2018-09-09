<?php include "includes/header.php";?>
<?php include "includes/StudentModel.php";?>
<?php include "includes/AddressModel.php";?>
<?php include "includes/ClassModel.php";?>

<?php CreateStudentAndRelations(); ?>

<h2>Add a new Student: </h2>

<?php include "includes/student_form.php"; ?>

<h2>View Students in System: </h2>

<?php include "includes/student-list-table.php"; ?>

<?php include "includes/footer.php"; ?>
