<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 09/09/2018
 * Time: 13:01
 */

function UpdateStudent($studentId) {
    global $connection;
    if(isset($_POST['update_student_details'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $dateOfBirth = $_POST['date-of-birth'];
        $idNumber = $_POST['id-number'];
        $level = $_POST['level'];
        $query = "UPDATE students SET Name = '{$name}', Surname = '{$surname}', DateOfBirth = '{$dateOfBirth}', IDNumber = '{$idNumber}', Level = {$level} WHERE Id = {$studentId}; ";

        $queryUpdateStudent = $connection->query($query);

        if (!$queryUpdateStudent) {
            die('Query Failed ' . $connection->error($queryUpdateStudent));
        } else {
            echo "Successful Update!";
        }


    }
}