<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 09/09/2018
 * Time: 17:33
 */
?>

<h3>Student's Address's</h3>

<?php GetAddressesByStudentId($studentModel->getId()) ?>

<div class="address-list-wrapper">
    <div>
        <h4>Address1</h4>
        <address>
            <span>Address1</span>
            <span>Address2</span>
            <span>City</span>
            <span>State</span>
            <span>Zip/Post Code</span>
        </address>
    </div>
</div>