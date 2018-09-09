<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 09/09/2018
 * Time: 13:52
 */
$addingAddress = false;

if (!isset($addressModel)) {
    $addressModel = new AddressModel("", "", "", "", "", "", "", "");
    $addingAddress = true;
}
?>

<fieldset>
    <legend>Address</legend>
    <?php
        if($addingAddress){
            echo "<input type='hidden' name='addressId' value='{$addressModel->getId()}'>";
            echo "<input type='hidden' name='studentId' value='{$addressModel->getStudentId()}'>";
        }
    ?>
    <div class="label-input-wrapper">
        <label for="address1">Address1: </label>
        <input type="text" name="address1" placeholder="Enter Address1"
        <?php if(!$addingAddress) echo "value='{$addressModel->getAddress1()}'"; ?> required>
    </div>
    <div class="label-input-wrapper">
        <label for="address2">Address2: </label>
        <input type="text" name="address2" placeholder="Enter Address2"
        <?php if(!$addingAddress) echo "value='{$addressModel->getAddress1()}'"; ?> required>
    </div>
    <div class="label-input-wrapper">
        <label for="city">City: </label>
        <input type="text" name="city" placeholder="Enter City"
        <?php if(!$addingAddress) echo "value='{$addressModel->getCity()}'"; ?> >
    </div>
    <div class="label-input-wrapper">
        <label for="state">State: </label>
        <input type="text" name="state" placeholder="Enter State"
        <?php if(!$addingAddress) echo "value='{$addressModel->getState()}'"; ?> required>
    </div>
    <div class="label-input-wrapper">
        <label for="post-code">Post/Zip Code: </label>
        <input type="text" name="post-code" placeholder="Enter Post/Zip Code"
        <?php if(!$addingAddress) echo "value='{$addressModel->getZipPostalCode()}'"; ?> required>
    </div>
    <?php

    if(!$addingAddress) {
        echo "<label>Display Order: </label>";
        echo "<input type='number' value='{$addressModel->getDisplayOrder()}' name='display-order'>";
    }

    ?>
</fieldset>
