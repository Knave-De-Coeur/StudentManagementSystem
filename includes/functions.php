<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 09/09/2018
 * Time: 13:01
 */

// Student functions

function CreateStudentAndRelations() {
    if(isset($_POST['add_student'])) {
        global $connection;

        // insert student record
        $newStudentId = CreateStudent();

        // isnert address and relate it to student
        CreateAddress($newStudentId);

        // class data
        $classId = $_POST['class'];

        CreateStudentClassMapper($newStudentId, $classId);

        echo "Student Successfully Added!";
    }
}

function CreateStudent() {
    global $connection;

    $query = "INSERT INTO students (Name, Surname, DateOfBirth, IDNumber, Level) VALUES (?, ?, ?, ?, ?)";
    $prepareQuery = $connection->prepare($query);
    $prepareQuery->bind_param("ssbsi", $studentName, $studentSurname, $studentDateOfBirth, $studentIdNumber, $studentLevel);

    $studentName = $_POST['name'];
    $studentSurname = $_POST['surname'];
    $studentDateOfBirth = date("Y-m-d", strtotime($_POST['date-of-birth']));
    $studentIdNumber = $_POST['id-number'];
    $studentLevel = $_POST['level'];
    $prepareQuery->execute();

    if(!$prepareQuery->execute()) {
        die("Insert StudentQuery Failed " . $connection->error);
    }

    return $connection->insert_id;
}

function GetStudentByID($studentId){
    global $connection;

    $query = "SELECT * FROM Students Where id = {$studentId}";

    $queryTheStudentId = $connection->query($query);

    if (!$queryTheStudentId) {
        die("Query Failed " . $connection->error);
    }

    $student = $queryTheStudentId->fetch_assoc();

    $studentModel = new StudentModel($student['Id'], $student['Name'], $student['Surname'], $student['DateOfBirth'], $student['IDNumber'], $student['Level']);

    return $studentModel;
}

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

function DeleteStudent() {
    global $connection;

    if(isset($_GET['delete_student'])) {
        $studentIdToDelete = $_GET['delete_student'];
        $query = "DELETE FROM students WHERE Id = {$studentIdToDelete}; ";

        $queryDeleteStudent= $connection->query($query);

        if(!$queryDeleteStudent) {
            die('Query Failed ' . $connection->error);
        } else {
            echo "Deletion successful!";
        }

        header("Location: index.php");

    }
}

// Class Functions

function GetAllClassesAndOutputSelect() {
    global $connection;

    $query = "SELECT * FROM class; ";

    $queryAllClasses = $connection->query($query);

    if(!$queryAllClasses) {
        die("Query Failed " . $connection->error);
    }

    if($queryAllClasses->num_rows > 0) {
        echo "<select name='class'>";

        while($row = $queryAllClasses->fetch_assoc()) {
            $id = $row['Id'];
            $room = $row['Room'];
            echo "<option value='{$id}'>{$room}</option>";
        }
        echo "</select>";
    }

}

function CreateStudentClassMapper($studentId, $classId) {
    global $connection;

    $query = "INSERT INTO student_class_mapper (StudentId, ClassId, DisplayOrder) ";
    $query .= "VALUES ($studentId, $classId, 0); ";

    $queryInsertStudentClassMapper = $connection->query($query);

    if(!$queryInsertStudentClassMapper) {
        die("Query InsertStudentClass Failed " . $connection->error);
    }
}

function DeleteStudentClassMapper($id) {
    global $connection;

    $query = "DELETE FROM student_class_mapper WHERE id = {$id}; ";

    $queryRemoveStudentClassMapper = $connection->query($query);

    if(!$queryRemoveStudentClassMapper) {
        die("Query DeleteStudentClass Failed " . $connection->error);
    } else {
        echo "Deletion successful!";
    }

    header("Location: index.php");


}

// Address Functions
function CreateAddress($studentIdToRelate) {
    global $connection;
    
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postcode = $_POST['post-code'];

    $query = "INSERT INTO address (StudentId, Address1, Address2, City, State, ZipPostalCode) ";
    $query .= "VALUES ($studentIdToRelate, '$address1', '$address2', '$city', '$state', '$postcode'); ";

    $queryInsertAddress = $connection->query($query);

    if(!$queryInsertAddress) {
        die("Insert AddressQuery Failed " . $connection->error);
    }
}

function GetAddressesByStudentId($studentId) {

}