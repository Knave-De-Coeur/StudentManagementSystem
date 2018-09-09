<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 08/09/2018
 * Time: 12:43
 */
include "includes/header.php";
include "includes/Data.php";
include "includes/AddressModel.php";


if(!isset($_GET['address'])) {
    die("Something Went Wrong");
}

// This will check if we've posted to update so then, the updated values will be outputted
UpdateAddress($_GET['address']);

// model for page
$addressModel = GetAddressByID($_GET['address']);

?>

<h1>Address Details</h1>

<h2>Student Id: <?php echo $addressModel->getStudentId() . "'s address'"; ?></h2>


    <form action="#" method="post">
        <?php include "includes/address_form.php"; ?>
        <input type="submit" value="Update Address" name="update_student_address">
    </form>

<p>The display order is to set the order of addresses, the lower the number, the higher it will appear in the list thus, making it primary address</p>

<?php

global $connection;

$query = "SELECT * FROM address WHERE StudentId = {$_GET['address']} AND  Id <> {$addressModel->getId()} ORDER BY DisplayOrder; ";

$queryAddressesByStudentId = $connection->query($query);

$addressNumber = 1;

if ($queryAddressesByStudentId->num_rows > 0) {
    ?>
    <p>Here's a list of the student's other addresses: </p>
    <div class="address-list-wrapper">
        <?php
        while($row = $queryAddressesByStudentId->fetch_assoc()) {
            $addressNumber++;
            $address = new AddressModel($row['Id'], $_GET['address'], $row['Address1'], $row['Address2'], $row['City'], $row['State'], $row['ZipPostalCode'], $row['DisplayOrder']);
            $displayOrder = $row['DisplayOrder'];
            ?>

            <div class="address-block">
                <h3>Address: <?php echo $addressNumber; ?></h3>
                <address>
                    <span><?php echo $address->getAddress1(); ?></span>
                    <span><?php echo $address->getAddress2(); ?></span>
                    <span><?php echo $address->getCity(); ?></span>
                    <span><?php echo $address->getState(); ?></span>
                    <span><?php echo $address->getZipPostalCode(); ?></span>
                </address>
                <div><strong>Display Order: </strong><?php echo $address->getDisplayOrder(); ?></div>
                <a href="student_address.php?address=<?php echo $address->getId(); ?>">Edit Address Details</a>
            </div>

            <?php
        }
        ?>
    </div>
    <?php
}
?>

<?php include "includes/footer.php"; ?>