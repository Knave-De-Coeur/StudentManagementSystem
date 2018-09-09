<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 09/09/2018
 * Time: 13:01
 */

$addingStudent = false;

if (!isset($studentModel)) {
    $studentModel = new StudentModel("", "", "");
    $addingStudent = true;
}

?>

<form action="" method="post">
    <fieldset>
        <legend>Details:</legend>
        <div class="label-input-wrapper">
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder="Enter Name"
            <?php if(!$addingStudent) echo "value='{$studentModel->getName()}'"; ?>">
        </div>
        <div class="label-input-wrapper">
            <label for="surname">Surname: </label>
            <input type="text" name="surname" placeholder="Enter Surname"
                <?php if(!$addingStudent) echo "value='{$studentModel->getSurname()}'"; ?>>
        </div>
        <div class="label-input-wrapper">
            <label for="date-of-birth">Date of Birth: </label>
            <input type="date" name="date-of-birth" >
        </div>
        <div class="label-input-wrapper">
            <label for="date-of-birth">ID Number: </label>
            <input type="text" name="id-number" >
        </div>
        <div class="label-input-wrapper">
            <label for="level">Level: </label>
            <input type="number" name="level" >
        </div>
    </fieldset>
    <fieldset>
        <legend>Address</legend>
    </fieldset>
    <input type="submit" value="submit" name="">
</form>
