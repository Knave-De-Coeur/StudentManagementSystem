<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 09/09/2018
 * Time: 13:01
 */

    $addingStudent = false;

    if (!isset($studentModel)) {
        $studentModel = new StudentModel("", "", "", "", "", "");
        $addingStudent = true;
    }

?>

<form action="#" method="post">
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
            <input type="date" name="date-of-birth"
                <?php if(!$addingStudent) echo "value='{$studentModel->getDateOfBirth()}'"; ?>>
        </div>
        <div class="label-input-wrapper">
            <label for="id-number">ID Number: </label>
            <input type="text" name="id-number" placeholder="Enter Id Number"
                <?php if(!$addingStudent) echo "value='{$studentModel->getIdNumber()}'"; ?>>
        </div>
        <div class="label-input-wrapper">
            <label for="class">Class: </label>
            <?php

            GetAllClassesAndOutputSelect()

            ?>
        </div>
        <div class="label-input-wrapper">
            <label for="level">Level: </label>
            <input type="number" name="level" placeholder="Enter Current Level"
                <?php if(!$addingStudent) echo "value='{$studentModel->getLevel()}'"; ?>>
        </div>
    </fieldset>
    <?php if($addingStudent) include "address_form.php"; ?>
    <?php

    $formValue = "";
    $submitName = "";

    if(!$addingStudent) {
        $submitName = "update_student_details";
        $formValue = "Update";
    } else {
        $submitName = "add_student";

        $formValue = "Add";
    }

    ?>
    <input type="submit" value="<?php  echo $formValue ?>" name="<?php echo $submitName; ?>">
</form>
